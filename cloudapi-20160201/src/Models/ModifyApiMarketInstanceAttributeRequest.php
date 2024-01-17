<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiMarketInstanceAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceAttributes;
    protected $_name = [
        'aliUid'             => 'AliUid',
        'groupId'            => 'GroupId',
        'instanceAttributes' => 'InstanceAttributes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceAttributes) {
            $res['InstanceAttributes'] = $this->instanceAttributes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiMarketInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceAttributes'])) {
            $model->instanceAttributes = $map['InstanceAttributes'];
        }

        return $model;
    }
}
