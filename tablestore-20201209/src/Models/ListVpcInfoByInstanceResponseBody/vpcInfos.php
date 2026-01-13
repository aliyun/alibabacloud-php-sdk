<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models\ListVpcInfoByInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class vpcInfos extends Model
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
    public $instanceVpcName;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'domain' => 'Domain',
        'endpoint' => 'Endpoint',
        'instanceVpcName' => 'InstanceVpcName',
        'regionNo' => 'RegionNo',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->instanceVpcName) {
            $res['InstanceVpcName'] = $this->instanceVpcName;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['InstanceVpcName'])) {
            $model->instanceVpcName = $map['InstanceVpcName'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
