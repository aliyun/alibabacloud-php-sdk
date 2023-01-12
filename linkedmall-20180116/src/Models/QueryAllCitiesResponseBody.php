<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCitiesResponseBody\cities;
use AlibabaCloud\Tea\Model;

class QueryAllCitiesResponseBody extends Model
{
    /**
     * @var cities
     */
    public $cities;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @example 1
     *
     * @var string
     */
    public $logsId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 79C01D47-3C44-57D9-BC99-1B33F7ED14B8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1004
     *
     * @var string
     */
    public $subCode;

    /**
     * @example 1004
     *
     * @var string
     */
    public $subMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'cities'     => 'Cities',
        'code'       => 'Code',
        'logsId'     => 'LogsId',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'subCode'    => 'SubCode',
        'subMessage' => 'SubMessage',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cities) {
            $res['Cities'] = null !== $this->cities ? $this->cities->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->logsId) {
            $res['LogsId'] = $this->logsId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->subMessage) {
            $res['SubMessage'] = $this->subMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAllCitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cities'])) {
            $model->cities = cities::fromMap($map['Cities']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LogsId'])) {
            $model->logsId = $map['LogsId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['SubMessage'])) {
            $model->subMessage = $map['SubMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
