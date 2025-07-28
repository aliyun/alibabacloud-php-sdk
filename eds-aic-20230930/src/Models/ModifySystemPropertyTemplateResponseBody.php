<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifySystemPropertyTemplateResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 5C5CEF0A-D6E1-58D3-8750-67DB4F82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ap-angyvganxlf****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'requestId' => 'RequestId',
        'templateId' => 'TemplateId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySystemPropertyTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
