# OpenFFL

**OpenFFL** is an open-source solution designed to help Federal Firearms Licensees (FFLs) manage their acquisition and disposition (A&D) records, bound books, and other compliance-related tasks efficiently. This project aims to provide FFLs with a feature-rich, legally compliant, and secure platform for managing firearms inventory and transactions.

## Features

- **Electronic Acquisition & Disposition Records**: Track and manage A&D records with ease, ensuring full ATF compliance.
- **Unlimited Bound Books**: Create bound books for consignment, transfers, gunsmithing, NFA, pawn, or any other use.
- **Electronic Transfers**: Automatically receive filled-out acquisition records from other FFLs.
- **Bulk Changes**: Make compliant changes to large volumes of data quickly, such as correcting item details.
- **Unlimited Users**: Add multiple employees without additional costs, each with unique access and audit trails.
- **NTC Integration**: Automate National Tracing Center reporting obligations for distributors, manufacturers, and importers.
- **Automated File Copies**: Easily manage file copies of active and expired licenses.
- **Bulk Acquire/Dispose**: Upload and manage records in bulk, including sequential serial number generation.
- **Manufacturing Module**: Track manufacturing processes for new items from raw materials or conversions.
- **Electronic 4473**: Capture and store electronic 4473 forms with digital signatures.
- **Compliance Warnings**: Get alerts for potential compliance violations before they happen.
- **Automated Backups**: Ensure your data is safe with automated, compliant backups.
- **Audit Trail**: Track every action for full compliance with ATF regulations.
- **Age Restrictions**: Set custom age restrictions based on firearm type to ensure legal compliance.
- **Multi-State Background Check**: Automate background checks across multiple states.
- **Electronic Signatures**: Support for capturing digital signatures on any device, including tablets.
- **Inventory Control**: Barcode scanning and printing for fast and accurate inventory management.

## Installation

### Prerequisites

Ensure you have the following installed on your system:

- Node.js or Python (depending on the backend you choose)
- MongoDB or PostgreSQL (for database management)
- Docker (optional, but recommended for containerized deployments)

### Steps

1. Clone this repository:
   ```bash
   git clone https://github.com/yourusername/OpenFFL.git
   cd OpenFFL
   ```

2. Install dependencies:
   ```bash
   npm install
   ```
   or
   ```bash
   pip install -r requirements.txt
   ```

3. Configure the environment variables by creating a `.env` file:
   ```bash
   cp .env.example .env
   ```

4. Start the server:
   ```bash
   npm start
   ```
   or
   ```bash
   python manage.py runserver
   ```

5. Access the app at `http://localhost:3000` or your chosen port.

## Usage

- **Bound Books**: Navigate to the Bound Books section to create or manage multiple books for different purposes (e.g., transfers, NFA, etc.).
- **4473 Forms**: Upload and complete electronic 4473 forms, capture digital signatures, and store them securely.
- **Compliance Monitoring**: Review compliance warnings and audit trails in real time to ensure accurate records.

## Contribution

We welcome contributions to OpenFFL. Please follow these steps if you'd like to contribute:

1. Fork the repository
2. Create a new feature branch (`git checkout -b feature/YourFeature`)
3. Commit your changes (`git commit -m 'Add new feature'`)
4. Push to the branch (`git push origin feature/YourFeature`)
5. Create a pull request

## License

This project is licensed for personal or small business use - see the [LICENSE](LICENSE) file for details.

---

## Roadmap

Planned future enhancements include:

- Integration with POS and ERP systems.
- Expanded support for multi-state background checks.
- Advanced reporting tools.
- Spanish 4473 form support.
  
Stay tuned for updates!

## Acknowledgments

- Inspired by FastBound, a leading FFL software solution.
- Special thanks to contributors and the open-source community.


