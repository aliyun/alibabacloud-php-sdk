<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerServiceIdList) {
            $res['CustomerServiceIdList'] = $this->customerServiceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerServiceIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerServiceIdList'])) {
            if (!empty($map['CustomerServiceIdList'])) {
                $model->customerServiceIdList = $map['CustomerServiceIdList'];
            }
        }

        return $model;
    }
}
