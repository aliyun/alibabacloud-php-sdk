<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models\ListVpcInfoByAgentStorageResponseBody;

use AlibabaCloud\Dara\Model;

class vpcInfos extends Model
{
    /**
     * @var string
     */
    public $agentStorageVpcName;

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
    public $regionNo;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'agentStorageVpcName' => 'AgentStorageVpcName',
        'domain' => 'Domain',
        'endpoint' => 'Endpoint',
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
        if (null !== $this->agentStorageVpcName) {
            $res['AgentStorageVpcName'] = $this->agentStorageVpcName;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
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
        if (isset($map['AgentStorageVpcName'])) {
            $model->agentStorageVpcName = $map['AgentStorageVpcName'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
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
