<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody;

use AlibabaCloud\Tea\Model;

class requestConfig extends Model
{
    /**
     * @var string
     */
    public $bodyModel;

    /**
     * @var string
     */
    public $requestPath;

    /**
     * @var string
     */
    public $requestHttpMethod;

    /**
     * @var string
     */
    public $bodyFormat;

    /**
     * @var string
     */
    public $requestMode;

    /**
     * @var string
     */
    public $postBodyDescription;

    /**
     * @var string
     */
    public $requestProtocol;
    protected $_name = [
        'bodyModel'           => 'BodyModel',
        'requestPath'         => 'RequestPath',
        'requestHttpMethod'   => 'RequestHttpMethod',
        'bodyFormat'          => 'BodyFormat',
        'requestMode'         => 'RequestMode',
        'postBodyDescription' => 'PostBodyDescription',
        'requestProtocol'     => 'RequestProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyModel) {
            $res['BodyModel'] = $this->bodyModel;
        }
        if (null !== $this->requestPath) {
            $res['RequestPath'] = $this->requestPath;
        }
        if (null !== $this->requestHttpMethod) {
            $res['RequestHttpMethod'] = $this->requestHttpMethod;
        }
        if (null !== $this->bodyFormat) {
            $res['BodyFormat'] = $this->bodyFormat;
        }
        if (null !== $this->requestMode) {
            $res['RequestMode'] = $this->requestMode;
        }
        if (null !== $this->postBodyDescription) {
            $res['PostBodyDescription'] = $this->postBodyDescription;
        }
        if (null !== $this->requestProtocol) {
            $res['RequestProtocol'] = $this->requestProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BodyModel'])) {
            $model->bodyModel = $map['BodyModel'];
        }
        if (isset($map['RequestPath'])) {
            $model->requestPath = $map['RequestPath'];
        }
        if (isset($map['RequestHttpMethod'])) {
            $model->requestHttpMethod = $map['RequestHttpMethod'];
        }
        if (isset($map['BodyFormat'])) {
            $model->bodyFormat = $map['BodyFormat'];
        }
        if (isset($map['RequestMode'])) {
            $model->requestMode = $map['RequestMode'];
        }
        if (isset($map['PostBodyDescription'])) {
            $model->postBodyDescription = $map['PostBodyDescription'];
        }
        if (isset($map['RequestProtocol'])) {
            $model->requestProtocol = $map['RequestProtocol'];
        }

        return $model;
    }
}
