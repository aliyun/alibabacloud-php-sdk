<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeRegionsRequest extends Model
{
    /**
     * @description The language in which the regions and zones are named. This parameter corresponds to the `LocalName` response parameter. Valid values:
     *
     *   zh-CN: Chinese
     *   en-US: English
     *   ja: Japanese
     *
     * Default value: zh-CN.
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of resource. Valid values:
     *
     *   ear: async replication
     *   lens: CloudLens for EBS
     *   dbsc: Dedicated Block Storage Cluster
     *
     * Default value: ear.
     * @example ear
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'regionId'       => 'RegionId',
        'resourceType'   => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
