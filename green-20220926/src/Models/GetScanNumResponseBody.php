<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetScanNumResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $limitNumber;

    /**
     * @example AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $scanNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $sumNumber;

    /**
     * @example True
     *
     * @var bool
     */
    public $tag;
    protected $_name = [
        'limitNumber' => 'LimitNumber',
        'requestId'   => 'RequestId',
        'scanNumber'  => 'ScanNumber',
        'sumNumber'   => 'SumNumber',
        'tag'         => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limitNumber) {
            $res['LimitNumber'] = $this->limitNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scanNumber) {
            $res['ScanNumber'] = $this->scanNumber;
        }
        if (null !== $this->sumNumber) {
            $res['SumNumber'] = $this->sumNumber;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScanNumResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LimitNumber'])) {
            $model->limitNumber = $map['LimitNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScanNumber'])) {
            $model->scanNumber = $map['ScanNumber'];
        }
        if (isset($map['SumNumber'])) {
            $model->sumNumber = $map['SumNumber'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
