<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardRequest\updateCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardRequest\updateCommand\standardTemplateReference\attributeValueList;

class standardTemplateReference extends Model
{
    /**
     * @var attributeValueList[]
     */
    public $attributeValueList;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'attributeValueList' => 'AttributeValueList',
        'id' => 'Id',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->attributeValueList)) {
            Model::validateArray($this->attributeValueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeValueList) {
            if (\is_array($this->attributeValueList)) {
                $res['AttributeValueList'] = [];
                $n1 = 0;
                foreach ($this->attributeValueList as $item1) {
                    $res['AttributeValueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AttributeValueList'])) {
            if (!empty($map['AttributeValueList'])) {
                $model->attributeValueList = [];
                $n1 = 0;
                foreach ($map['AttributeValueList'] as $item1) {
                    $model->attributeValueList[$n1] = attributeValueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
