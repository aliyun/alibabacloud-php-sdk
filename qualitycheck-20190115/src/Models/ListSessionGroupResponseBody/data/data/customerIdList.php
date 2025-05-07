<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Dara\Model;

class customerIdList extends Model
{
    /**
     * @var string[]
     */
    public $customerIdList;
    protected $_name = [
        'customerIdList' => 'CustomerIdList',
    ];

    public function validate()
    {
        if (\is_array($this->customerIdList)) {
            Model::validateArray($this->customerIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerIdList) {
            if (\is_array($this->customerIdList)) {
                $res['CustomerIdList'] = [];
                $n1 = 0;
                foreach ($this->customerIdList as $item1) {
                    $res['CustomerIdList'][$n1++] = $item1;
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
        if (isset($map['CustomerIdList'])) {
            if (!empty($map['CustomerIdList'])) {
                $model->customerIdList = [];
                $n1 = 0;
                foreach ($map['CustomerIdList'] as $item1) {
                    $model->customerIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
