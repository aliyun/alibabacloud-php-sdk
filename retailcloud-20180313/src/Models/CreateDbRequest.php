<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateDbRequest extends Model
{
    /**
     * @example gbk
     *
     * @var string
     */
    public $characterSetName;

    /**
     * @var string
     */
    public $dbDescription;

    /**
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @example rds_mysql
     *
     * @var string
     */
    public $dbName;
    protected $_name = [
        'characterSetName' => 'CharacterSetName',
        'dbDescription'    => 'DbDescription',
        'dbInstanceId'     => 'DbInstanceId',
        'dbName'           => 'DbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }
        if (null !== $this->dbDescription) {
            $res['DbDescription'] = $this->dbDescription;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CharacterSetName'])) {
            $model->characterSetName = $map['CharacterSetName'];
        }
        if (isset($map['DbDescription'])) {
            $model->dbDescription = $map['DbDescription'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        return $model;
    }
}
