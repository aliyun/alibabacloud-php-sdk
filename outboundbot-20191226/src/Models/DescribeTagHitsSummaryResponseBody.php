<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTagHitsSummaryResponseBody\tagGroups;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTagHitsSummaryResponseBody\tagHitsList;
use AlibabaCloud\Tea\Model;

class DescribeTagHitsSummaryResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 5391EB13-A0E7-402D-A407-B99D4ABAF22A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var tagGroups[]
     */
    public $tagGroups;

    /**
     * @var tagHitsList[]
     */
    public $tagHitsList;
    protected $_name = [
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'tagGroups'      => 'TagGroups',
        'tagHitsList'    => 'TagHitsList',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tagGroups) {
            $res['TagGroups'] = [];
            if (null !== $this->tagGroups && \is_array($this->tagGroups)) {
                $n = 0;
                foreach ($this->tagGroups as $item) {
                    $res['TagGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tagHitsList) {
            $res['TagHitsList'] = [];
            if (null !== $this->tagHitsList && \is_array($this->tagHitsList)) {
                $n = 0;
                foreach ($this->tagHitsList as $item) {
                    $res['TagHitsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTagHitsSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TagGroups'])) {
            if (!empty($map['TagGroups'])) {
                $model->tagGroups = [];
                $n                = 0;
                foreach ($map['TagGroups'] as $item) {
                    $model->tagGroups[$n++] = null !== $item ? tagGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TagHitsList'])) {
            if (!empty($map['TagHitsList'])) {
                $model->tagHitsList = [];
                $n                  = 0;
                foreach ($map['TagHitsList'] as $item) {
                    $model->tagHitsList[$n++] = null !== $item ? tagHitsList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
