<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTagHitsSummaryResponseBody\tagGroups;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTagHitsSummaryResponseBody\tagHitsList;

class DescribeTagHitsSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
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
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'tagGroups' => 'TagGroups',
        'tagHitsList' => 'TagHitsList',
    ];

    public function validate()
    {
        if (\is_array($this->tagGroups)) {
            Model::validateArray($this->tagGroups);
        }
        if (\is_array($this->tagHitsList)) {
            Model::validateArray($this->tagHitsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tagGroups)) {
                $res['TagGroups'] = [];
                $n1 = 0;
                foreach ($this->tagGroups as $item1) {
                    $res['TagGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagHitsList) {
            if (\is_array($this->tagHitsList)) {
                $res['TagHitsList'] = [];
                $n1 = 0;
                foreach ($this->tagHitsList as $item1) {
                    $res['TagHitsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['TagGroups'] as $item1) {
                    $model->tagGroups[$n1] = tagGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TagHitsList'])) {
            if (!empty($map['TagHitsList'])) {
                $model->tagHitsList = [];
                $n1 = 0;
                foreach ($map['TagHitsList'] as $item1) {
                    $model->tagHitsList[$n1] = tagHitsList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
