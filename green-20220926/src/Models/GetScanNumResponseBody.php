<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetScanNumResponseBody extends Model
{
    /**
     * @var int
     */
    public $limitNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $scanNumber;

    /**
     * @var int
     */
    public $sumNumber;

    /**
     * @var bool
     */
    public $tag;
    protected $_name = [
        'limitNumber' => 'LimitNumber',
        'requestId' => 'RequestId',
        'scanNumber' => 'ScanNumber',
        'sumNumber' => 'SumNumber',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
