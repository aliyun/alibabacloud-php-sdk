<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardTemplateResponseBody\templateInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardTemplateResponseBody\templateInfo\attributesConfig\attributeList;

class attributesConfig extends Model
{
    /**
     * @var attributeList[]
     */
    public $attributeList;
    protected $_name = [
        'attributeList' => 'AttributeList',
    ];

    public function validate()
    {
        if (\is_array($this->attributeList)) {
            Model::validateArray($this->attributeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeList) {
            if (\is_array($this->attributeList)) {
                $res['AttributeList'] = [];
                $n1 = 0;
                foreach ($this->attributeList as $item1) {
                    $res['AttributeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttributeList'])) {
            if (!empty($map['AttributeList'])) {
                $model->attributeList = [];
                $n1 = 0;
                foreach ($map['AttributeList'] as $item1) {
                    $model->attributeList[$n1] = attributeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
