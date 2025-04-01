<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterTemplatesResponseBody\parameters\templateRecord;

class parameters extends Model
{
    /**
     * @var templateRecord[]
     */
    public $templateRecord;
    protected $_name = [
        'templateRecord' => 'TemplateRecord',
    ];

    public function validate()
    {
        if (\is_array($this->templateRecord)) {
            Model::validateArray($this->templateRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateRecord) {
            if (\is_array($this->templateRecord)) {
                $res['TemplateRecord'] = [];
                $n1 = 0;
                foreach ($this->templateRecord as $item1) {
                    $res['TemplateRecord'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TemplateRecord'])) {
            if (!empty($map['TemplateRecord'])) {
                $model->templateRecord = [];
                $n1 = 0;
                foreach ($map['TemplateRecord'] as $item1) {
                    $model->templateRecord[$n1++] = templateRecord::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
