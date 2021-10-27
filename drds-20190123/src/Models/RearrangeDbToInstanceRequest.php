<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class RearrangeDbToInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $chooseRds;

    /**
     * @var string
     */
    public $chooseSubDb;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string[]
     */
    public $instanceList;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'chooseRds'      => 'ChooseRds',
        'chooseSubDb'    => 'ChooseSubDb',
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'instanceList'   => 'InstanceList',
        'orderId'        => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chooseRds) {
            $res['ChooseRds'] = $this->chooseRds;
        }
        if (null !== $this->chooseSubDb) {
            $res['ChooseSubDb'] = $this->chooseSubDb;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RearrangeDbToInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChooseRds'])) {
            $model->chooseRds = $map['ChooseRds'];
        }
        if (isset($map['ChooseSubDb'])) {
            $model->chooseSubDb = $map['ChooseSubDb'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = $map['InstanceList'];
            }
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
