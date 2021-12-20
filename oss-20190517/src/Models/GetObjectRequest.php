<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetObjectRequest extends Model
{
    /**
     * @var string
     */
    public $responseCacheControl;

    /**
     * @var string
     */
    public $responseContentDisposition;

    /**
     * @var string
     */
    public $responseContentEncoding;

    /**
     * @var string
     */
    public $responseContentLanguage;

    /**
     * @var string
     */
    public $responseContentType;

    /**
     * @var string
     */
    public $responseExpires;
    protected $_name = [
        'responseCacheControl'       => 'response-cache-control',
        'responseContentDisposition' => 'response-content-disposition',
        'responseContentEncoding'    => 'response-content-encoding',
        'responseContentLanguage'    => 'response-content-language',
        'responseContentType'        => 'response-content-type',
        'responseExpires'            => 'response-expires',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->responseCacheControl) {
            $res['response-cache-control'] = $this->responseCacheControl;
        }
        if (null !== $this->responseContentDisposition) {
            $res['response-content-disposition'] = $this->responseContentDisposition;
        }
        if (null !== $this->responseContentEncoding) {
            $res['response-content-encoding'] = $this->responseContentEncoding;
        }
        if (null !== $this->responseContentLanguage) {
            $res['response-content-language'] = $this->responseContentLanguage;
        }
        if (null !== $this->responseContentType) {
            $res['response-content-type'] = $this->responseContentType;
        }
        if (null !== $this->responseExpires) {
            $res['response-expires'] = $this->responseExpires;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['response-cache-control'])) {
            $model->responseCacheControl = $map['response-cache-control'];
        }
        if (isset($map['response-content-disposition'])) {
            $model->responseContentDisposition = $map['response-content-disposition'];
        }
        if (isset($map['response-content-encoding'])) {
            $model->responseContentEncoding = $map['response-content-encoding'];
        }
        if (isset($map['response-content-language'])) {
            $model->responseContentLanguage = $map['response-content-language'];
        }
        if (isset($map['response-content-type'])) {
            $model->responseContentType = $map['response-content-type'];
        }
        if (isset($map['response-expires'])) {
            $model->responseExpires = $map['response-expires'];
        }

        return $model;
    }
}
