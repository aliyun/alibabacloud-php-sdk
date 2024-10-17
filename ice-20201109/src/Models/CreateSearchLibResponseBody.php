<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateSearchLibResponseBody extends Model
{
    /**
     * @description The status code returned.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the request.
     *
     * @example ******3B-0E1A-586A-AC29-742247******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the search library.
     *
     * @example test1
     *
     * @var string
     */
    public $searchLibName;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'          => 'Code',
        'requestId'     => 'RequestId',
        'searchLibName' => 'SearchLibName',
        'success'       => 'Success',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSearchLibResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
