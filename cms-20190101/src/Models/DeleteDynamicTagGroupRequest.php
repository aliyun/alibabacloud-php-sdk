<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteDynamicTagGroupRequest extends Model
{
    /**
     * @description The ID of the tag rule.
     *
     * For information about how to obtain the ID of a tag rule, see [DescribeDynamicTagRuleList](~~150126~~).
     * @example 6b882d9a-5117-42e2-9d0c-4749a0c6****
     *
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dynamicTagRuleId' => 'DynamicTagRuleId',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDynamicTagGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
