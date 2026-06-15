<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\BatchSendMailRequest;

use AlibabaCloud\Dara\Model;

class receivers extends Model
{
    /**
     * @var string[]
     */
    public $templateData;

    /**
     * @var string[]
     */
    public $to;
    protected $_name = [
        'templateData' => 'TemplateData',
        'to' => 'To',
    ];

    public function validate()
    {
        if (\is_array($this->templateData)) {
            Model::validateArray($this->templateData);
        }
        if (\is_array($this->to)) {
            Model::validateArray($this->to);
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

        if (null !== $this->to) {
            if (\is_array($this->to)) {
                $res['To'] = [];
                $n1 = 0;
                foreach ($this->to as $item1) {
                    $res['To'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['To'])) {
            if (!empty($map['To'])) {
                $model->to = [];
                $n1 = 0;
                foreach ($map['To'] as $item1) {
                    $model->to[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
