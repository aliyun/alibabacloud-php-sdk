<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class fixedResponseConfig extends Model
{
    /**
     * @description The content of the response. The content can be up to 1 KB in size, and can contain only ASCII characters.
     *
     * @example dssacav
     *
     * @var string
     */
    public $content;

    /**
     * @description The content format of the response.
     *
     * Valid values: **text/plain**, **text/css**, **text/html**, **application/javascript**, and **application/json**.
     * @example text/plain
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The HTTP status code in responses. Valid values: **2xx**, **4xx**, **5xx**. The value must be a numeric string. **x** must be a digit.
     *
     * @example 200
     *
     * @var string
     */
    public $httpCode;
    protected $_name = [
        'content'     => 'Content',
        'contentType' => 'ContentType',
        'httpCode'    => 'HttpCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fixedResponseConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }

        return $model;
    }
}
