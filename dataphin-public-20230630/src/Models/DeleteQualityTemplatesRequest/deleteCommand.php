<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteQualityTemplatesRequest;

use AlibabaCloud\Dara\Model;

class deleteCommand extends Model
{
    /**
     * @var int[]
     */
    public $templateIdList;
    protected $_name = [
        'templateIdList' => 'TemplateIdList',
    ];

    public function validate()
    {
        if (\is_array($this->templateIdList)) {
            Model::validateArray($this->templateIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateIdList) {
            if (\is_array($this->templateIdList)) {
                $res['TemplateIdList'] = [];
                $n1 = 0;
                foreach ($this->templateIdList as $item1) {
                    $res['TemplateIdList'][$n1] = $item1;
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
        if (isset($map['TemplateIdList'])) {
            if (!empty($map['TemplateIdList'])) {
                $model->templateIdList = [];
                $n1 = 0;
                foreach ($map['TemplateIdList'] as $item1) {
                    $model->templateIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
