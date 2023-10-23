<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models\ListVpcInfoByVpcResponseBody\vpcInfos;

use AlibabaCloud\Tea\Model;

class vpcInfo extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceVpcName;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'domain'          => 'Domain',
        'endpoint'        => 'Endpoint',
        'instanceName'    => 'InstanceName',
        'instanceVpcName' => 'InstanceVpcName',
        'regionNo'        => 'RegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceVpcName) {
            $res['InstanceVpcName'] = $this->instanceVpcName;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceVpcName'])) {
            $model->instanceVpcName = $map['InstanceVpcName'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
