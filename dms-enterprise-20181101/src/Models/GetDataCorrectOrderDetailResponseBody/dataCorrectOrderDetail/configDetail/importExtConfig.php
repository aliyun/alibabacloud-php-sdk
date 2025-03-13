<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\configDetail;

use AlibabaCloud\Tea\Model;

class importExtConfig extends Model
{
    /**
     * @description Indicates whether the first row of the CSV file contains field names. Valid values:
     *
     *   **true**: The first row in the CSV file contains field names.
     *   **false**: The first row in the CSV file contains data.
     *
     * >  This parameter is valid if the value of **FileType** is **CSV** or **EXCEL**.
     *
     * @example true
     *
     * @var bool
     */
    public $csvFirstRowIsColumnDef;

    /**
     * @description Indicates whether an error that occurs is ignored. Valid values:
     *
     *   **true**: If an error occurs when SQL statements are being executed, DMS skips the current SQL statement and continues to execute subsequent SQL statements.
     *   **false**: If an error occurs when SQL statements are being executed, DMS stops executing subsequent SQL statements.
     *
     * @example false
     *
     * @var bool
     */
    public $ignoreError;

    /**
     * @description The import mode. Valid values:
     *
     *   **FAST_MODE**: fast mode. In the Execute step, the uploaded file is read and SQL statements are executed to import data to the specified destination database. Compared with the security mode, this mode can be used to import data in a less secure but more efficient manner.
     *   **SAFE_MODE**: security mode. In the Precheck step, the uploaded file is parsed, and SQL statements or CSV file data is cached. In the Execute step, the cached SQL statements are read and executed to import data, or the cached CSV file data is read and imported to the specified destination database. Compared with the fast mode, this mode can be used to import data in a more secure but less efficient manner.
     *
     * @example FAST_MODE
     *
     * @var string
     */
    public $importMode;

    /**
     * @description The mode in which data is to be imported to the destination table. Valid values:
     *
     *   **INSERT**: The database checks the primary key during data insertion. If the primary key is duplicated, an error is reported.
     *   **INSERT_IGNORE**: If the imported data contains data records that are the same as those in the destination table, the new data records are ignored.
     *   **REPLACE_INTO**: If the imported data contains a row that has the same value for the primary key or unique index as an existing row in the destination table, the system deletes the existing row and inserts the new row into the destination table.
     *
     * >  This parameter is valid if the value of FileType is CSV or EXCEL.
     *
     * @example INSERT
     *
     * @var string
     */
    public $insertType;
    protected $_name = [
        'csvFirstRowIsColumnDef' => 'CsvFirstRowIsColumnDef',
        'ignoreError' => 'IgnoreError',
        'importMode' => 'ImportMode',
        'insertType' => 'InsertType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->csvFirstRowIsColumnDef) {
            $res['CsvFirstRowIsColumnDef'] = $this->csvFirstRowIsColumnDef;
        }
        if (null !== $this->ignoreError) {
            $res['IgnoreError'] = $this->ignoreError;
        }
        if (null !== $this->importMode) {
            $res['ImportMode'] = $this->importMode;
        }
        if (null !== $this->insertType) {
            $res['InsertType'] = $this->insertType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return importExtConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsvFirstRowIsColumnDef'])) {
            $model->csvFirstRowIsColumnDef = $map['CsvFirstRowIsColumnDef'];
        }
        if (isset($map['IgnoreError'])) {
            $model->ignoreError = $map['IgnoreError'];
        }
        if (isset($map['ImportMode'])) {
            $model->importMode = $map['ImportMode'];
        }
        if (isset($map['InsertType'])) {
            $model->insertType = $map['InsertType'];
        }

        return $model;
    }
}
