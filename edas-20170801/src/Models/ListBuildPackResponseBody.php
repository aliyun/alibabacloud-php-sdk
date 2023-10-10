<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListBuildPackResponseBody\buildPackList;
use AlibabaCloud\Tea\Model;

class ListBuildPackResponseBody extends Model
{
    /**
     * @description The returned versions of EDAS Container.
     *
     * @var buildPackList
     */
    public $buildPackList;

    /**
     * @description code
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 4FD4-*************
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'buildPackList' => 'BuildPackList',
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildPackList) {
            $res['BuildPackList'] = null !== $this->buildPackList ? $this->buildPackList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBuildPackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildPackList'])) {
            $model->buildPackList = buildPackList::fromMap($map['BuildPackList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
