<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyAclEntriesRequest extends Model
{
    /**
     * @description The Internet access control policy.
     *
     * Valid values:
     *
     *   allow: allows access to the Internet.
     *
     *   disable: forbids access to the Internet.
     *
     * This parameter is required.
     * @example allow
     *
     * @var string
     */
    public $policy;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The instance IDs (office network IDs or cloud computer IDs) to which the Internet access control policy is applicable.
     *
     * This parameter is required.
     * @var string[]
     */
    public $sourceId;

    /**
     * @description The granularity to which the Internet access control policy is applicable.
     *
     * Valid values:
     *
     *   desktop: cloud computer granularity.
     *
     *   vpc: office network granularity.
     *
     * This parameter is required.
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
