<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class EnableMetricRuleBlackListRequest extends Model
{
    /**
     * @description The IDs of the blacklist policies. Separate multiple IDs with commas (,). You can specify up to 50 IDs.
     *
     * For information about how to obtain the ID of a blacklist policy, see [DescribeMetricRuleBlackList](~~457257~~).
     *
     * > You can also set this parameter to a JSON array. Example: `["a9ad2ac2-3ed9-11ed-b878-0242ac12****","5cb8a9a4-198f-4651-a353-f8b28788****"]`.
     * @example a9ad2ac2-3ed9-11ed-b878-0242ac12****
     *
     * @var string
     */
    public $id;

    /**
     * @description Specifies whether to enable the blacklist policy. Valid values:
     *
     *   true: The blacklist policy is enabled.
     *   false (default): The blacklist policy is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $isEnable;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'id'       => 'Id',
        'isEnable' => 'IsEnable',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableMetricRuleBlackListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
