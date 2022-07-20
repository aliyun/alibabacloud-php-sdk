<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetSystemTemplateResponseBody\systemTemplate;
use AlibabaCloud\Tea\Model;

class GetSystemTemplateResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 模板信息
     *
     * @var systemTemplate
     */
    public $systemTemplate;
    protected $_name = [
        'requestId'      => 'RequestId',
        'systemTemplate' => 'SystemTemplate',
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
        if (null !== $this->systemTemplate) {
            $res['SystemTemplate'] = null !== $this->systemTemplate ? $this->systemTemplate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSystemTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemTemplate'])) {
            $model->systemTemplate = systemTemplate::fromMap($map['SystemTemplate']);
        }

        return $model;
    }
}
