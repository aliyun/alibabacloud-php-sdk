<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $uidList;
    protected $_name = [
        'uidList' => 'UidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uidList) {
            $res['UidList'] = $this->uidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UidList'])) {
            if (!empty($map['UidList'])) {
                $model->uidList = $map['UidList'];
            }
        }

        return $model;
    }
}
