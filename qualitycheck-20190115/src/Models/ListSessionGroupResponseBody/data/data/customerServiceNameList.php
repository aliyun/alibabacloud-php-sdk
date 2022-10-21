<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerServiceNameList) {
            $res['CustomerServiceNameList'] = $this->customerServiceNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerServiceNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerServiceNameList'])) {
            if (!empty($map['CustomerServiceNameList'])) {
                $model->customerServiceNameList = $map['CustomerServiceNameList'];
            }
        }

        return $model;
    }
}
