<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeTagValuesRequest extends Model
{
    /**
     * @description The type of the tag key. Valid values:
     *
     *   **Custom**: The tag key is created by users.
     *   **System**: The tag key is created by the system.
     *
     * >  By default, if the parameter is left empty, both custom tag keys and system tag keys are returned.
     * @example Custom
     *
     * @var string
     */
    public $category;

    /**
     * @description The tag key.
     *
     * >  This parameter is required.
     * @example owner
     *
     * @var string
     */
    public $key;

    /**
     * @description The page number of the start page to return for a tag key that has multiple values. The valid value ranges from 1 to the maximum value of the INTEGER data type. This parameter is often used with the PageSize parameter. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of tag values to return each time for a tag key that has multiple values. Default value: 20.
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
     * >  If this parameter is left empty, the values of all tag keys of the current user are returned.
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
        'key'          => 'Key',
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
        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
     * @return DescribeTagValuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
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
