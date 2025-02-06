<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Dara\Model;

class customerServiceIdList extends Model
{
    /**
     * @var string[]
     */
    public $customerServiceIdList;
    protected $_name = [
        'customerServiceIdList' => 'CustomerServiceIdList',
    ];

    public function validate()
    {
        if (\is_array($this->customerServiceIdList)) {
            Model::validateArray($this->customerServiceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerServiceIdList) {
            if (\is_array($this->customerServiceIdList)) {
                $res['CustomerServiceIdList'] = [];
                $n1                           = 0;
                foreach ($this->customerServiceIdList as $item1) {
                    $res['CustomerServiceIdList'][$n1++] = $item1;
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
        if (isset($map['CustomerServiceIdList'])) {
            if (!empty($map['CustomerServiceIdList'])) {
                $model->customerServiceIdList = [];
                $n1                           = 0;
                foreach ($map['CustomerServiceIdList'] as $item1) {
                    $model->customerServiceIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
