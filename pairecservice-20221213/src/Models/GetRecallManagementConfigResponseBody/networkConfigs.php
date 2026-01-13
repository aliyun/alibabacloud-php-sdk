<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementConfigResponseBody;

use AlibabaCloud\Dara\Model;

class networkConfigs extends Model
{
    /**
     * @var string
     */
    public $privateLinkAddress;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'privateLinkAddress' => 'PrivateLinkAddress',
        'status' => 'Status',
        'vpcId' => 'VpcId',
        'vswitchIds' => 'VswitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->vswitchIds)) {
            Model::validateArray($this->vswitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateLinkAddress) {
            $res['PrivateLinkAddress'] = $this->privateLinkAddress;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchIds) {
            if (\is_array($this->vswitchIds)) {
                $res['VswitchIds'] = [];
                foreach ($this->vswitchIds as $key1 => $value1) {
                    $res['VswitchIds'][$key1] = $value1;
                }
            }
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
        if (isset($map['PrivateLinkAddress'])) {
            $model->privateLinkAddress = $map['PrivateLinkAddress'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchIds'])) {
            if (!empty($map['VswitchIds'])) {
                $model->vswitchIds = [];
                foreach ($map['VswitchIds'] as $key1 => $value1) {
                    $model->vswitchIds[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
