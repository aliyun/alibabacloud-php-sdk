<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowResponseBody\content;
use AlibabaCloud\Tea\Model;

class GetMediaConnectFlowResponseBody extends Model
{
    /**
     * @description The response body.
     *
     * @var content
     */
    public $content;

    /**
     * @description The call description.
     *
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the request.
     *
     * @example FB503AEF-118E-1516-89E2-7B227EA1AC20
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned code. A value of 0 indicates the call is successful.
     *
     * @example 0
     *
     * @var int
     */
    public $retcode;
    protected $_name = [
        'content'     => 'Content',
        'description' => 'Description',
        'requestId'   => 'RequestId',
        'retcode'     => 'Retcode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retcode) {
            $res['Retcode'] = $this->retcode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaConnectFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Retcode'])) {
            $model->retcode = $map['Retcode'];
        }

        return $model;
    }
}
