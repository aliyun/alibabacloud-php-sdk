<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody;

use AlibabaCloud\Dara\Model;

class requestConfig extends Model
{
    /**
     * @var string
     */
    public $bodyFormat;
    /**
     * @var string
     */
    public $bodyModel;
    /**
     * @var bool
     */
    public $escapePathParam;
    /**
     * @var string
     */
    public $postBodyDescription;
    /**
     * @var string
     */
    public $requestHttpMethod;
    /**
     * @var string
     */
    public $requestMode;
    /**
     * @var string
     */
    public $requestPath;
    /**
     * @var string
     */
    public $requestProtocol;
    protected $_name = [
        'bodyFormat'          => 'BodyFormat',
        'bodyModel'           => 'BodyModel',
        'escapePathParam'     => 'EscapePathParam',
        'postBodyDescription' => 'PostBodyDescription',
        'requestHttpMethod'   => 'RequestHttpMethod',
        'requestMode'         => 'RequestMode',
        'requestPath'         => 'RequestPath',
        'requestProtocol'     => 'RequestProtocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyFormat) {
            $res['BodyFormat'] = $this->bodyFormat;
        }

        if (null !== $this->bodyModel) {
            $res['BodyModel'] = $this->bodyModel;
        }

        if (null !== $this->escapePathParam) {
            $res['EscapePathParam'] = $this->escapePathParam;
        }

        if (null !== $this->postBodyDescription) {
            $res['PostBodyDescription'] = $this->postBodyDescription;
        }

        if (null !== $this->requestHttpMethod) {
            $res['RequestHttpMethod'] = $this->requestHttpMethod;
        }

        if (null !== $this->requestMode) {
            $res['RequestMode'] = $this->requestMode;
        }

        if (null !== $this->requestPath) {
            $res['RequestPath'] = $this->requestPath;
        }

        if (null !== $this->requestProtocol) {
            $res['RequestProtocol'] = $this->requestProtocol;
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
        if (isset($map['BodyFormat'])) {
            $model->bodyFormat = $map['BodyFormat'];
        }

        if (isset($map['BodyModel'])) {
            $model->bodyModel = $map['BodyModel'];
        }

        if (isset($map['EscapePathParam'])) {
            $model->escapePathParam = $map['EscapePathParam'];
        }

        if (isset($map['PostBodyDescription'])) {
            $model->postBodyDescription = $map['PostBodyDescription'];
        }

        if (isset($map['RequestHttpMethod'])) {
            $model->requestHttpMethod = $map['RequestHttpMethod'];
        }

        if (isset($map['RequestMode'])) {
            $model->requestMode = $map['RequestMode'];
        }

        if (isset($map['RequestPath'])) {
            $model->requestPath = $map['RequestPath'];
        }

        if (isset($map['RequestProtocol'])) {
            $model->requestProtocol = $map['RequestProtocol'];
        }

        return $model;
    }
}
