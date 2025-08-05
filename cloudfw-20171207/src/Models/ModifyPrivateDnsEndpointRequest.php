<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyPrivateDnsEndpointRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pd-12345
     *
     * @var string
     */
    public $accessInstanceId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $accessInstanceName;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $primaryDns;

    /**
     * @description This parameter is required.
     *
     * @example Custom
     *
     * @var string
     */
    public $privateDnsType;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example 1.1.1.2
     *
     * @var string
     */
    public $standbyDns;
    protected $_name = [
        'accessInstanceId' => 'AccessInstanceId',
        'accessInstanceName' => 'AccessInstanceName',
        'primaryDns' => 'PrimaryDns',
        'privateDnsType' => 'PrivateDnsType',
        'regionNo' => 'RegionNo',
        'standbyDns' => 'StandbyDns',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessInstanceId) {
            $res['AccessInstanceId'] = $this->accessInstanceId;
        }
        if (null !== $this->accessInstanceName) {
            $res['AccessInstanceName'] = $this->accessInstanceName;
        }
        if (null !== $this->primaryDns) {
            $res['PrimaryDns'] = $this->primaryDns;
        }
        if (null !== $this->privateDnsType) {
            $res['PrivateDnsType'] = $this->privateDnsType;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->standbyDns) {
            $res['StandbyDns'] = $this->standbyDns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPrivateDnsEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessInstanceId'])) {
            $model->accessInstanceId = $map['AccessInstanceId'];
        }
        if (isset($map['AccessInstanceName'])) {
            $model->accessInstanceName = $map['AccessInstanceName'];
        }
        if (isset($map['PrimaryDns'])) {
            $model->primaryDns = $map['PrimaryDns'];
        }
        if (isset($map['PrivateDnsType'])) {
            $model->privateDnsType = $map['PrivateDnsType'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['StandbyDns'])) {
            $model->standbyDns = $map['StandbyDns'];
        }

        return $model;
    }
}
