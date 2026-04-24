<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateApiKeyQuotaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateApiKeyQuotaResponseBody\data\customKeyList;

class data extends Model
{
    /**
     * @var customKeyList[]
     */
    public $customKeyList;
    protected $_name = [
        'customKeyList' => 'CustomKeyList',
    ];

    public function validate()
    {
        if (\is_array($this->customKeyList)) {
            Model::validateArray($this->customKeyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customKeyList) {
            if (\is_array($this->customKeyList)) {
                $res['CustomKeyList'] = [];
                $n1 = 0;
                foreach ($this->customKeyList as $item1) {
                    $res['CustomKeyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomKeyList'])) {
            if (!empty($map['CustomKeyList'])) {
                $model->customKeyList = [];
                $n1 = 0;
                foreach ($map['CustomKeyList'] as $item1) {
                    $model->customKeyList[$n1] = customKeyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
