<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeTemplateResponseBody extends Model
{
    /**
     * @example 87F54B2B-AEF0-4C33-A72A-3F8856A575E9
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {"ROSTemplateFormatVersion": "2015-09-01"}
     *
     * @var mixed[]
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

        return $model;
    }
}
