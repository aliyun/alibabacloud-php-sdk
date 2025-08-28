<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalSecurityIPGroupRelationResponseBody;

use AlibabaCloud\Dara\Model;

class globalSecurityIPGroupRel extends Model
{
    /**
     * @var string
     */
    public $GIpList;

    /**
     * @var string
     */
    public $globalIgName;

    /**
     * @var string
     */
    public $globalSecurityGroupId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'GIpList' => 'GIpList',
        'globalIgName' => 'GlobalIgName',
        'globalSecurityGroupId' => 'GlobalSecurityGroupId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->GIpList) {
            $res['GIpList'] = $this->GIpList;
        }

        if (null !== $this->globalIgName) {
            $res['GlobalIgName'] = $this->globalIgName;
        }

        if (null !== $this->globalSecurityGroupId) {
            $res['GlobalSecurityGroupId'] = $this->globalSecurityGroupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['GIpList'])) {
            $model->GIpList = $map['GIpList'];
        }

        if (isset($map['GlobalIgName'])) {
            $model->globalIgName = $map['GlobalIgName'];
        }

        if (isset($map['GlobalSecurityGroupId'])) {
            $model->globalSecurityGroupId = $map['GlobalSecurityGroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
