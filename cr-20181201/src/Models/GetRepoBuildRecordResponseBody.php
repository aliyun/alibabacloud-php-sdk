<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordResponseBody\image;
use AlibabaCloud\Tea\Model;

class GetRepoBuildRecordResponseBody extends Model
{
    /**
     * @description The ID of the image building record.
     *
     * @example 79174CBA-8556-443A-8976-22C922D7****
     *
     * @var string
     */
    public $buildRecordId;

    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the image building was completed.
     *
     * @example 1568718698000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The information about the image.
     *
     * @var image
     */
    public $image;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The ID of the request.
     *
     * @example a78ec6fb-16ea-4649-93b7-f52afba7d9de1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the image building started.
     *
     * @example 1568718468000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the instance.
     *
     * @example true
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'buildRecordId' => 'BuildRecordId',
        'code'          => 'Code',
        'endTime'       => 'EndTime',
        'image'         => 'Image',
        'isSuccess'     => 'IsSuccess',
        'requestId'     => 'RequestId',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildRecordId) {
            $res['BuildRecordId'] = $this->buildRecordId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoBuildRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildRecordId'])) {
            $model->buildRecordId = $map['BuildRecordId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
