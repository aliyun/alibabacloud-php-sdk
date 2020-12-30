<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\rdsInstances;

use AlibabaCloud\Tea\Model;

class rdsInstance extends Model
{
    /**
     * @var bool
     */
    public $imported;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'imported'     => 'Imported',
        'databaseName' => 'DatabaseName',
        'id'           => 'Id',
        'accountName'  => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imported) {
            $res['Imported'] = $this->imported;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Imported'])) {
            $model->imported = $map['Imported'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
