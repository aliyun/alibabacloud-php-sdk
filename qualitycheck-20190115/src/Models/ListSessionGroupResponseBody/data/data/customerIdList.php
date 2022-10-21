<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerIdList) {
            $res['CustomerIdList'] = $this->customerIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerIdList'])) {
            if (!empty($map['CustomerIdList'])) {
                $model->customerIdList = $map['CustomerIdList'];
            }
        }

        return $model;
    }
}
