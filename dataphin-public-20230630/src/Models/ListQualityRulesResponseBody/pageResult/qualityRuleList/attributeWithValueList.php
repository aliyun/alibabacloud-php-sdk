<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList\attributeWithValueList\attributeInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList\attributeWithValueList\attributeValue;

class attributeWithValueList extends Model
{
    /**
     * @var attributeInfo
     */
    public $attributeInfo;

    /**
     * @var attributeValue
     */
    public $attributeValue;
    protected $_name = [
        'attributeInfo' => 'AttributeInfo',
        'attributeValue' => 'AttributeValue',
    ];

    public function validate()
    {
        if (null !== $this->attributeInfo) {
            $this->attributeInfo->validate();
        }
        if (null !== $this->attributeValue) {
            $this->attributeValue->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = null !== $this->attributeInfo ? $this->attributeInfo->toArray($noStream) : $this->attributeInfo;
        }

        if (null !== $this->attributeValue) {
            $res['AttributeValue'] = null !== $this->attributeValue ? $this->attributeValue->toArray($noStream) : $this->attributeValue;
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
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = attributeInfo::fromMap($map['AttributeInfo']);
        }

        if (isset($map['AttributeValue'])) {
            $model->attributeValue = attributeValue::fromMap($map['AttributeValue']);
        }

        return $model;
    }
}
