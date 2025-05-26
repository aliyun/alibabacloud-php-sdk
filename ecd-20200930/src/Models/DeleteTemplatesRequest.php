<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string[]
     */
    public $templateIds;
    protected $_name = [
        'bizType' => 'BizType',
        'templateIds' => 'TemplateIds',
    ];

    public function validate()
    {
        if (\is_array($this->templateIds)) {
            Model::validateArray($this->templateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->templateIds) {
            if (\is_array($this->templateIds)) {
                $res['TemplateIds'] = [];
                $n1 = 0;
                foreach ($this->templateIds as $item1) {
                    $res['TemplateIds'][$n1++] = $item1;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['TemplateIds'])) {
            if (!empty($map['TemplateIds'])) {
                $model->templateIds = [];
                $n1 = 0;
                foreach ($map['TemplateIds'] as $item1) {
                    $model->templateIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
