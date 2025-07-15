<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageListRequest extends Model
{
    /**
     * @description The ID of the image.
     *
     * @example imgc-075cllfeuazh0****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image.
     *
     * @example Android 12 image
     *
     * @var string
     */
    public $imageName;

    /**
     * @description Image package type.
     *
     * @example VM
     *
     * @var string
     */
    public $imagePackageType;

    /**
     * @description The type of the image.
     *
     * Valid values:
     *
     *   User: custom images.
     *   System: system images.
     *
     * This parameter is required.
     *
     * @example System
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If the parameter is left empty, the data is queried from the first entry.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kw9dGL5jves2FS9RLq****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The state of the image.
     *
     * Valid values:
     *
     *   AVAILABLE: The image is available.
     *   DELETE: The image is deleted.
     *   INIT: The image is being initialized.
     *   CREATE_FAILED: The image failed to be created.
     *   CREATING: The image is being created.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imagePackageType' => 'ImagePackageType',
        'imageType' => 'ImageType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imagePackageType) {
            $res['ImagePackageType'] = $this->imagePackageType;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImagePackageType'])) {
            $model->imagePackageType = $map['ImagePackageType'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
