<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyAclEntriesRequest extends Model
{
    /**
     * @description The ACL policy.
     *
     * Valid values:
     *
     *   allow
     *
     * <!-- -->
     *
     *   deny
     *
     * <!-- -->
     * @example allow
     *
     * @var string
     */
    public $policy;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of instances that correspond to the ACL granularity.
     *
     * @var string[]
     */
    public $sourceId;

    /**
     * @description The network granularity that corresponds to the access control list (ACL) policy.
     *
     * Valid values:
     *
     *   desktop
     *
     * <!-- -->
     *
     *   vpc
     *
     * <!-- -->
     * @example desktop
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'policy'     => 'Policy',
        'regionId'   => 'RegionId',
        'sourceId'   => 'SourceId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAclEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceId'])) {
            if (!empty($map['SourceId'])) {
                $model->sourceId = $map['SourceId'];
            }
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
