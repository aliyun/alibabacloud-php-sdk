<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateResponseBody extends Model
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
     * @description The content of the template.
     *
     * For more information about the template syntax, see [Structure of Terraform templates](~~184397~~).
     * @example {
     * }
     * @var string
     */
    public $templateBody;
    protected $_name = [
        'requestId'    => 'RequestId',
        'templateBody' => 'TemplateBody',
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
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        return $model;
    }
}
