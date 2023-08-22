<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoTagResponseBody extends Model
{
    /**
     * @description The ID of the image.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The size of the image. Unit: Bytes.
     *
     * @example 67bfbcc12b67936ec7f867927817cbb071832b873dbcaed312a1930ba5f1****
     *
     * @var string
     */
    public $digest;

    /**
     * @description crr-tquyps22md8p****
     *
     * @example 1572839125000
     *
     * @var int
     */
    public $imageCreate;

    /**
     * @example 45023655bf39c382e26a8607d057c27871dee163c1ecf48cc1ebf2a1****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The number of milliseconds that have elapsed since the image was last updated.
     *
     * @example 27107966
     *
     * @var int
     */
    public $imageSize;

    /**
     * @description The ID of the request.
     *
     * @example 1572875608000
     *
     * @var int
     */
    public $imageUpdate;

    /**
     * @description The status of the image. Valid values:
     *
     *   `NORMAL`: The image is normal.
     *   `DELETING`: The image is being deleted.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description 1.0
     *
     * @example 031572FA-7D8F-4C05-B790-1071E0E05DE6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the instance.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @description The version of the repository.
     *
     * @example 1.0
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'code'        => 'Code',
        'digest'      => 'Digest',
        'imageCreate' => 'ImageCreate',
        'imageId'     => 'ImageId',
        'imageSize'   => 'ImageSize',
        'imageUpdate' => 'ImageUpdate',
        'isSuccess'   => 'IsSuccess',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
        'tag'         => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->imageCreate) {
            $res['ImageCreate'] = $this->imageCreate;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->imageUpdate) {
            $res['ImageUpdate'] = $this->imageUpdate;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoTagResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['ImageCreate'])) {
            $model->imageCreate = $map['ImageCreate'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['ImageUpdate'])) {
            $model->imageUpdate = $map['ImageUpdate'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
