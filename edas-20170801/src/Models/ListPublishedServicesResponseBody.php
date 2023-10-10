<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListPublishedServicesResponseBody\publishedServicesList;
use AlibabaCloud\Tea\Model;

class ListPublishedServicesResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned.
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
     * @description The published services.
     *
     * @var publishedServicesList
     */
    public $publishedServicesList;

    /**
     * @description The ID of the request.
     *
     * @example 1D6FC-4307-4583-BA6F-215F3857E****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                  => 'Code',
        'message'               => 'Message',
        'publishedServicesList' => 'PublishedServicesList',
        'requestId'             => 'RequestId',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->publishedServicesList) {
            $res['PublishedServicesList'] = null !== $this->publishedServicesList ? $this->publishedServicesList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublishedServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PublishedServicesList'])) {
            $model->publishedServicesList = publishedServicesList::fromMap($map['PublishedServicesList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
