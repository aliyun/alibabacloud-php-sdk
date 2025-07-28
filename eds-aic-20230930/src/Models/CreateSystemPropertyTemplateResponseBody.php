<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateSystemPropertyTemplateResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 425F351C-3F8E-5218-A520-B6311D0D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ap-g6gyv4a4xlf****
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
     * @return CreateSystemPropertyTemplateResponseBody
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
