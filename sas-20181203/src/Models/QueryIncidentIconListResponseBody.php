<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentIconListResponseBody\infoList;

class QueryIncidentIconListResponseBody extends Model
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
     * @var infoList
     */
    public $infoList;
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
     * @var int
     */
    public $timeCost;
    protected $_name = [
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'infoList'       => 'InfoList',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'timeCost'       => 'TimeCost',
    ];

    public function validate()
    {
        if (null !== $this->infoList) {
            $this->infoList->validate();
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

        if (null !== $this->infoList) {
            $res['InfoList'] = null !== $this->infoList ? $this->infoList->toArray($noStream) : $this->infoList;
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

        if (null !== $this->timeCost) {
            $res['TimeCost'] = $this->timeCost;
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

        if (isset($map['InfoList'])) {
            $model->infoList = infoList::fromMap($map['InfoList']);
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

        if (isset($map['TimeCost'])) {
            $model->timeCost = $map['TimeCost'];
        }

        return $model;
    }
}
