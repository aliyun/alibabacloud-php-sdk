<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityGroupConfigurationResponseBody\items;

use AlibabaCloud\Dara\Model;

class ecsSecurityGroupRelation extends Model
{
    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'netType' => 'NetType',
        'regionId' => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
