<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The URL of the template.
     *
     * @example oss://servicecatalog-cn-hangzhou/146611588617****\/terraform/template/tpl-bp1217we23****\/template.json
     *
     * @var string
     */
    public $templateUrl;
    protected $_name = [
        'requestId'   => 'RequestId',
        'templateUrl' => 'TemplateUrl',
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
        if (null !== $this->templateUrl) {
            $res['TemplateUrl'] = $this->templateUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateUrl'])) {
            $model->templateUrl = $map['TemplateUrl'];
        }

        return $model;
    }
}
