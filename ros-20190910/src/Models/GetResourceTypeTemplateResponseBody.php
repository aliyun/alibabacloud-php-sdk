<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeTemplateResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 87F54B2B-AEF0-4C33-A72A-3F8856A575E9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The structure that contains the template body. The template body must be 1 to 51,200 bytes in length. For more information, see [Template syntax](~~28857~~).
     *
     * > We recommend that use TemplateContent instead of TemplateBody.
     * @example {"ROSTemplateFormatVersion": "2015-09-01"}
     *
     * @var mixed[]
     */
    public $templateBody;

    /**
     * @description The JSON-formatted structure of the template body. For more information, see [Template syntax](~~28857~~).
     *
     * @example {
     * }
     * @var string
     */
    public $templateContent;
    protected $_name = [
        'requestId'       => 'RequestId',
        'templateBody'    => 'TemplateBody',
        'templateContent' => 'TemplateContent',
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
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceTypeTemplateResponseBody
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
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        return $model;
    }
}
