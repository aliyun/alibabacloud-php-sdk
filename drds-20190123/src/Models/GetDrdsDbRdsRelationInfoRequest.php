<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class GetDrdsDbRdsRelationInfoRequest extends Model
{
    /**
     * @description The name of the DRDS database.
     *
     * @example testDb
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the DRDS instance.
     *
     * @example drdshbga948vbpd2
     *
     * @var string
     */
    public $drdsInstanceId;
    protected $_name = [
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDrdsDbRdsRelationInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        return $model;
    }
}
