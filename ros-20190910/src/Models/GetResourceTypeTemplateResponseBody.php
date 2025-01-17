<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class GetResourceTypeTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var mixed[]
     */
    public $templateBody;
    /**
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
        if (\is_array($this->templateBody)) {
            Model::validateArray($this->templateBody);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templateBody) {
            if (\is_array($this->templateBody)) {
                $res['TemplateBody'] = [];
                foreach ($this->templateBody as $key1 => $value1) {
                    $res['TemplateBody'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TemplateBody'])) {
            if (!empty($map['TemplateBody'])) {
                $model->templateBody = [];
                foreach ($map['TemplateBody'] as $key1 => $value1) {
                    $model->templateBody[$key1] = $value1;
                }
            }
        }

        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        return $model;
    }
}
