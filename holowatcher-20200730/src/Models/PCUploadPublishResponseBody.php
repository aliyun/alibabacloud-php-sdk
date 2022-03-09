<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class PCUploadPublishResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $submit;
    protected $_name = [
        'requestId' => 'RequestId',
        'submit'    => 'Submit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->submit) {
            $res['Submit'] = $this->submit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PCUploadPublishResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Submit'])) {
            $model->submit = $map['Submit'];
        }

        return $model;
    }
}
