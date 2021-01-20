<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventHistogramResponseBody\eventHistograms;
use AlibabaCloud\Tea\Model;

class DescribeCustomEventHistogramResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var eventHistograms
     */
    public $eventHistograms;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'code'            => 'Code',
        'eventHistograms' => 'EventHistograms',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->eventHistograms) {
            $res['EventHistograms'] = null !== $this->eventHistograms ? $this->eventHistograms->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomEventHistogramResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EventHistograms'])) {
            $model->eventHistograms = eventHistograms::fromMap($map['EventHistograms']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
