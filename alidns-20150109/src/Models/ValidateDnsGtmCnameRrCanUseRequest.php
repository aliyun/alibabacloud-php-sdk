<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ValidateDnsGtmCnameRrCanUseRequest extends Model
{
    /**
     * @var string
     */
    public $cnameMode;

    /**
     * @var string
     */
    public $cnameRr;

    /**
     * @var string
     */
    public $cnameType;

    /**
     * @var string
     */
    public $cnameZone;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'cnameMode'  => 'CnameMode',
        'cnameRr'    => 'CnameRr',
        'cnameType'  => 'CnameType',
        'cnameZone'  => 'CnameZone',
        'instanceId' => 'InstanceId',
        'lang'       => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnameMode) {
            $res['CnameMode'] = $this->cnameMode;
        }
        if (null !== $this->cnameRr) {
            $res['CnameRr'] = $this->cnameRr;
        }
        if (null !== $this->cnameType) {
            $res['CnameType'] = $this->cnameType;
        }
        if (null !== $this->cnameZone) {
            $res['CnameZone'] = $this->cnameZone;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateDnsGtmCnameRrCanUseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CnameMode'])) {
            $model->cnameMode = $map['CnameMode'];
        }
        if (isset($map['CnameRr'])) {
            $model->cnameRr = $map['CnameRr'];
        }
        if (isset($map['CnameType'])) {
            $model->cnameType = $map['CnameType'];
        }
        if (isset($map['CnameZone'])) {
            $model->cnameZone = $map['CnameZone'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
