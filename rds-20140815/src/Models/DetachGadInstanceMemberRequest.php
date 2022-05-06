<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'gadInstanceName'    => 'GadInstanceName',
        'memberInstanceName' => 'MemberInstanceName',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachGadInstanceMemberRequest
     */
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

        return $model;
    }
}
