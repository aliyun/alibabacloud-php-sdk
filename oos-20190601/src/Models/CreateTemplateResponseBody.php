<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\CreateTemplateResponseBody\template;
use AlibabaCloud\Tea\Model;

class CreateTemplateResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 20758A-585D-4A41-A9B2-28DA8F4F534F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The metadata of the template.
     *
     * @var template
     */
    public $template;

    /**
     * @description The type of the template.
     *
     * @example Private
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'requestId'    => 'RequestId',
        'template'     => 'Template',
        'templateType' => 'TemplateType',
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
        if (null !== $this->template) {
            $res['Template'] = null !== $this->template ? $this->template->toMap() : null;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
        if (isset($map['Template'])) {
            $model->template = template::fromMap($map['Template']);
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
