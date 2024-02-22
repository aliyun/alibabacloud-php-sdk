<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class CreateDocumentTagResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 35A267BF-xxxx-54DB-8394-AA3B0742D833
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 471dxxxx3427
     *
     * @var string
     */
    public $tagId;
    protected $_name = [
        'requestId' => 'RequestId',
        'tagId'     => 'TagId',
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
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDocumentTagResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
