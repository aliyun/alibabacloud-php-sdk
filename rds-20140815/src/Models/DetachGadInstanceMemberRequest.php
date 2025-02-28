<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DetachGadInstanceMemberRequest extends Model
{
    /**
     * @var string
     */
    public $gadInstanceName;
    /**
     * @var string
     */
    public $memberInstanceName;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'gadInstanceName'    => 'GadInstanceName',
        'memberInstanceName' => 'MemberInstanceName',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gadInstanceName) {
            $res['GadInstanceName'] = $this->gadInstanceName;
        }

        if (null !== $this->memberInstanceName) {
            $res['MemberInstanceName'] = $this->memberInstanceName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['GadInstanceName'])) {
            $model->gadInstanceName = $map['GadInstanceName'];
        }

        if (isset($map['MemberInstanceName'])) {
            $model->memberInstanceName = $map['MemberInstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
