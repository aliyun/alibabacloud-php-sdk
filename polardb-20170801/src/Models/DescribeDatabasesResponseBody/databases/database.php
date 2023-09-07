<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponseBody\databases;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponseBody\databases\database\accounts;
use AlibabaCloud\Tea\Model;

class database extends Model
{
    /**
     * @description Details about the accounts.
     *
     * > A PolarDB for MySQL cluster does not support privileged accounts.
     * @var accounts
     */
    public $accounts;

    /**
     * @description The character set that the database uses. For more information, see [Character set tables](~~99716~~).
     *
     * @example utf8mb4
     *
     * @var string
     */
    public $characterSetName;

    /**
     * @description The description of the database.
     *
     * @example test_des
     *
     * @var string
     */
    public $DBDescription;

    /**
     * @description The name of the database.
     *
     * @example test_db
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The state of the database. Valid values:
     *
     *   **Creating**
     *   **Running**
     *   **Deleting**
     *
     * @example Running
     *
     * @var string
     */
    public $DBStatus;

    /**
     * @description The type of the database engine. Valid values:
     *
     *   **MySQL**
     *   **Oracle**
     *   **PostgreSQL**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The ID of the primary node in the cluster of Multi-master Cluster (Database/Table) Edition.
     *
     * @example 2
     *
     * @var string
     */
    public $masterID;
    protected $_name = [
        'accounts'         => 'Accounts',
        'characterSetName' => 'CharacterSetName',
        'DBDescription'    => 'DBDescription',
        'DBName'           => 'DBName',
        'DBStatus'         => 'DBStatus',
        'engine'           => 'Engine',
        'masterID'         => 'MasterID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toMap() : null;
        }
        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }
        if (null !== $this->DBDescription) {
            $res['DBDescription'] = $this->DBDescription;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->DBStatus) {
            $res['DBStatus'] = $this->DBStatus;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->masterID) {
            $res['MasterID'] = $this->masterID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return database
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accounts'])) {
            $model->accounts = accounts::fromMap($map['Accounts']);
        }
        if (isset($map['CharacterSetName'])) {
            $model->characterSetName = $map['CharacterSetName'];
        }
        if (isset($map['DBDescription'])) {
            $model->DBDescription = $map['DBDescription'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DBStatus'])) {
            $model->DBStatus = $map['DBStatus'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['MasterID'])) {
            $model->masterID = $map['MasterID'];
        }

        return $model;
    }
}
