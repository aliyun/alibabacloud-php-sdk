<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponseBody\databases;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponseBody\databases\database\accounts;

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
    /**
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
        if (null !== $this->accounts) {
            $this->accounts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toArray($noStream) : $this->accounts;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
