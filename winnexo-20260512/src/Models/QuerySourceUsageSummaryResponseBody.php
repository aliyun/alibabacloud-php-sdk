<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class QuerySourceUsageSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $retrievalCount;

    /**
     * @var int
     */
    public $retrievedSourceCount;

    /**
     * @var int
     */
    public $sourceCount;

    /**
     * @var int
     */
    public $usageCount;

    /**
     * @var int
     */
    public $usedSourceCount;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'requestId' => 'requestId',
        'retrievalCount' => 'retrievalCount',
        'retrievedSourceCount' => 'retrievedSourceCount',
        'sourceCount' => 'sourceCount',
        'usageCount' => 'usageCount',
        'usedSourceCount' => 'usedSourceCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->retrievalCount) {
            $res['retrievalCount'] = $this->retrievalCount;
        }

        if (null !== $this->retrievedSourceCount) {
            $res['retrievedSourceCount'] = $this->retrievedSourceCount;
        }

        if (null !== $this->sourceCount) {
            $res['sourceCount'] = $this->sourceCount;
        }

        if (null !== $this->usageCount) {
            $res['usageCount'] = $this->usageCount;
        }

        if (null !== $this->usedSourceCount) {
            $res['usedSourceCount'] = $this->usedSourceCount;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['retrievalCount'])) {
            $model->retrievalCount = $map['retrievalCount'];
        }

        if (isset($map['retrievedSourceCount'])) {
            $model->retrievedSourceCount = $map['retrievedSourceCount'];
        }

        if (isset($map['sourceCount'])) {
            $model->sourceCount = $map['sourceCount'];
        }

        if (isset($map['usageCount'])) {
            $model->usageCount = $map['usageCount'];
        }

        if (isset($map['usedSourceCount'])) {
            $model->usedSourceCount = $map['usedSourceCount'];
        }

        return $model;
    }
}
