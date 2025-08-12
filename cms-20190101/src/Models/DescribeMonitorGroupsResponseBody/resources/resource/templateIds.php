<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources\resource;

use AlibabaCloud\Dara\Model;

class templateIds extends Model
{
    /**
     * @var string[]
     */
    public $templateId;
    protected $_name = [
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->templateId)) {
            Model::validateArray($this->templateId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateId) {
            if (\is_array($this->templateId)) {
                $res['TemplateId'] = [];
                $n1 = 0;
                foreach ($this->templateId as $item1) {
                    $res['TemplateId'][$n1] = $item1;
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
        if (isset($map['TemplateId'])) {
            if (!empty($map['TemplateId'])) {
                $model->templateId = [];
                $n1 = 0;
                foreach ($map['TemplateId'] as $item1) {
                    $model->templateId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
