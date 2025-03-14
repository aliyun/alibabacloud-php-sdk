<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class ListSynonymsResponseBody extends Model
{
    /**
     * @example NoAuth
     *
     * @var string
     */
    public $code;

    /**
     * @example {
     * "data": {
     * "data": [
     * {
     * "gmtModified": 1734401404000,
     * "columns": [
     * "test.id",
     * "user_info.createdt"
     * ],
     * "synonymIdKey": "synonyms-AAAAAAAAAVLaD8z63NnFhA",
     * "wordSynonyms": [
     * "1"
     * ],
     * "workSpaceId": "10024809",
     * "gmtCreate": 1734401404000,
     * "word": "1",
     * "status": 1
     * }
     * ],
     * "nextToken": "k1BLjEN114wyfrhDHoJlbg==",
     * "totalCount": 0
     * }
     * }
     *
     * @var mixed
     */
    public $data;

    /**
     * @example NoAuth
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example D02D895A-5E58-5A9F-963D-D8B027AB7AE2
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
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'errorMsg' => 'errorMsg',
        'requestId' => 'requestId',
        'success' => 'success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSynonymsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
