<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTopResponseBody;

use AlibabaCloud\Tea\Model;

class dataCountList extends Model
{
    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $remoteIp;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'eventName'    => 'EventName',
        'remoteIp'     => 'RemoteIp',
        'instanceName' => 'InstanceName',
        'userName'     => 'UserName',
        'id'           => 'Id',
        'productCode'  => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->remoteIp) {
            $res['RemoteIp'] = $this->remoteIp;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCountList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['RemoteIp'])) {
            $model->remoteIp = $map['RemoteIp'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
