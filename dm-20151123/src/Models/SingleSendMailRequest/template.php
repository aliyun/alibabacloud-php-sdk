<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailRequest;

use AlibabaCloud\Dara\Model;

class template extends Model
{
    /**
     * @var string[]
     */
    public $templateData;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'templateData' => 'TemplateData',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->templateData)) {
            Model::validateArray($this->templateData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateData) {
            if (\is_array($this->templateData)) {
                $res['TemplateData'] = [];
                foreach ($this->templateData as $key1 => $value1) {
                    $res['TemplateData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['TemplateData'])) {
            if (!empty($map['TemplateData'])) {
                $model->templateData = [];
                foreach ($map['TemplateData'] as $key1 => $value1) {
                    $model->templateData[$key1] = $value1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
