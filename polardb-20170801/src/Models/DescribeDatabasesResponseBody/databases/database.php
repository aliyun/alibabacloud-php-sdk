<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponseBody\databases;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponseBody\databases\database\accounts;
use AlibabaCloud\Tea\Model;

class database extends Model
{
    /**
     * @var accounts
     */
    public $accounts;

    /**
     * @var string
     */
    public $characterSetName;

    /**
     * @var string
     */
    public $DBDescription;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $DBStatus;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'accounts'         => 'Accounts',
        'characterSetName' => 'CharacterSetName',
        'DBDescription'    => 'DBDescription',
        'DBName'           => 'DBName',
        'DBStatus'         => 'DBStatus',
        'engine'           => 'Engine',
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

        return $model;
    }
}
