<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Dara\Model;

class customerServiceNameList extends Model
{
    /**
     * @var string[]
     */
    public $customerServiceNameList;
    protected $_name = [
        'customerServiceNameList' => 'CustomerServiceNameList',
    ];

    public function validate()
    {
        if (\is_array($this->customerServiceNameList)) {
            Model::validateArray($this->customerServiceNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerServiceNameList) {
            if (\is_array($this->customerServiceNameList)) {
                $res['CustomerServiceNameList'] = [];
                $n1                             = 0;
                foreach ($this->customerServiceNameList as $item1) {
                    $res['CustomerServiceNameList'][$n1++] = $item1;
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
        if (isset($map['CustomerServiceNameList'])) {
            if (!empty($map['CustomerServiceNameList'])) {
                $model->customerServiceNameList = [];
                $n1                             = 0;
                foreach ($map['CustomerServiceNameList'] as $item1) {
                    $model->customerServiceNameList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
