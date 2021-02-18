<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Geoip\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeGeoipInstanceDataInfosRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $locationDataType;
    protected $_name = [
        'lang'             => 'Lang',
        'userClientIp'     => 'UserClientIp',
        'instanceId'       => 'InstanceId',
        'locationDataType' => 'LocationDataType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->locationDataType) {
            $res['LocationDataType'] = $this->locationDataType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGeoipInstanceDataInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LocationDataType'])) {
            $model->locationDataType = $map['LocationDataType'];
        }

        return $model;
    }
}
