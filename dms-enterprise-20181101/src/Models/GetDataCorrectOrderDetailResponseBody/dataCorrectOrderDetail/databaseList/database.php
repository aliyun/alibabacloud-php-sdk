<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\databaseList;

use AlibabaCloud\Tea\Model;

class database extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var string
     */
    public $envType;
    protected $_name = [
        'dbId'       => 'DbId',
        'dbType'     => 'DbType',
        'logic'      => 'Logic',
        'searchName' => 'SearchName',
        'envType'    => 'EnvType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        return $model;
    }
}
