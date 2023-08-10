<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeTagKeysRequest extends Model
{
    /**
     * @description The type of the tag. Valid values:
     *
     *   **Custom**: The tag is added by a user.
     *   **System**: The tag is added by the system.
     *
     * >  By default, if the parameter is left empty, custom tags and system tags are returned.
     * @example Custom
     *
     * @var string
     */
    public $category;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1. This parameter is used together with PageSize.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of tags to return on each page if the DTS instance has multiple tags. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the DTS instance. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking instance. You can call the [DescribeDtsJobs](~~209702~~) operation to query the instance ID.
     *
     * @example dtsl5o11f9029c****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type. Set the value to **ALIYUN::DTS::INSTANCE**.
     *
     * @example ALIYUN::DTS::INSTANCE
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'category'     => 'Category',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'regionId'     => 'RegionId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTagKeysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
