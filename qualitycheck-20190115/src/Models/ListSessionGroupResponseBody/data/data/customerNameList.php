<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerNameList) {
            $res['CustomerNameList'] = $this->customerNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerNameList'])) {
            if (!empty($map['CustomerNameList'])) {
                $model->customerNameList = $map['CustomerNameList'];
            }
        }

        return $model;
    }
}
