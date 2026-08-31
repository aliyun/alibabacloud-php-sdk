<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAssetAttributesRequest;

use AlibabaCloud\Dara\Model;

class queryCommand extends Model
{
    /**
     * @var string[]
     */
    public $attributeCodeList;

    /**
     * @var string[]
     */
    public $guidList;
    protected $_name = [
        'attributeCodeList' => 'AttributeCodeList',
        'guidList' => 'GuidList',
    ];

    public function validate()
    {
        if (\is_array($this->attributeCodeList)) {
            Model::validateArray($this->attributeCodeList);
        }
        if (\is_array($this->guidList)) {
            Model::validateArray($this->guidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeCodeList) {
            if (\is_array($this->attributeCodeList)) {
                $res['AttributeCodeList'] = [];
                $n1 = 0;
                foreach ($this->attributeCodeList as $item1) {
                    $res['AttributeCodeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->guidList) {
            if (\is_array($this->guidList)) {
                $res['GuidList'] = [];
                $n1 = 0;
                foreach ($this->guidList as $item1) {
                    $res['GuidList'][$n1] = $item1;
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
        if (isset($map['AttributeCodeList'])) {
            if (!empty($map['AttributeCodeList'])) {
                $model->attributeCodeList = [];
                $n1 = 0;
                foreach ($map['AttributeCodeList'] as $item1) {
                    $model->attributeCodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GuidList'])) {
            if (!empty($map['GuidList'])) {
                $model->guidList = [];
                $n1 = 0;
                foreach ($map['GuidList'] as $item1) {
                    $model->guidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
