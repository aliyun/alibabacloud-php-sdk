<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardTemplateRequest\createCommand\attributesConfig\attributeList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardTemplateRequest\createCommand\attributesConfig\attributeList\refAttribute\attributeFromInfo;

class refAttribute extends Model
{
    /**
     * @var attributeFromInfo
     */
    public $attributeFromInfo;

    /**
     * @var int
     */
    public $attributeId;
    protected $_name = [
        'attributeFromInfo' => 'AttributeFromInfo',
        'attributeId' => 'AttributeId',
    ];

    public function validate()
    {
        if (null !== $this->attributeFromInfo) {
            $this->attributeFromInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeFromInfo) {
            $res['AttributeFromInfo'] = null !== $this->attributeFromInfo ? $this->attributeFromInfo->toArray($noStream) : $this->attributeFromInfo;
        }

        if (null !== $this->attributeId) {
            $res['AttributeId'] = $this->attributeId;
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
        if (isset($map['AttributeFromInfo'])) {
            $model->attributeFromInfo = attributeFromInfo::fromMap($map['AttributeFromInfo']);
        }

        if (isset($map['AttributeId'])) {
            $model->attributeId = $map['AttributeId'];
        }

        return $model;
    }
}
