<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Dara\Model;

class customerNameList extends Model
{
    /**
     * @var string[]
     */
    public $customerNameList;
    protected $_name = [
        'customerNameList' => 'CustomerNameList',
    ];

    public function validate()
    {
        if (\is_array($this->customerNameList)) {
            Model::validateArray($this->customerNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerNameList) {
            if (\is_array($this->customerNameList)) {
                $res['CustomerNameList'] = [];
                $n1 = 0;
                foreach ($this->customerNameList as $item1) {
                    $res['CustomerNameList'][$n1] = $item1;
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
        if (isset($map['CustomerNameList'])) {
            if (!empty($map['CustomerNameList'])) {
                $model->customerNameList = [];
                $n1 = 0;
                foreach ($map['CustomerNameList'] as $item1) {
                    $model->customerNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
