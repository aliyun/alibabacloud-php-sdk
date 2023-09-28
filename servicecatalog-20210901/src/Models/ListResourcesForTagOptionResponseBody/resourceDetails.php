<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListResourcesForTagOptionResponseBody;

use AlibabaCloud\Tea\Model;

class resourceDetails extends Model
{
    /**
     * @description The time when the resource was created.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-11-04T08:07:04.281986714Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the resource.
     *
     * The value must be 1 to 128 characters in length.
     * @example The description of the resource.
     *
     * @var string
     */
    public $description;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the resource.
     *
     * @example acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****
     *
     * @var string
     */
    public $resourceArn;

    /**
     * @description The ID of the resource with which the tag option is associated.
     *
     * @example port-bp15p96922****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the resource.
     *
     * @example DEMO-ECS
     *
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'resourceArn'  => 'ResourceArn',
        'resourceId'   => 'ResourceId',
        'resourceName' => 'ResourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
