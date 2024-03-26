<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetCustomerListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var string[]
     */
    public $uidList;
    protected $_name = [
        'totalSize' => 'TotalSize',
        'uidList'   => 'UidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
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
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['UidList'])) {
            if (!empty($map['UidList'])) {
                $model->uidList = $map['UidList'];
            }
        }

        return $model;
    }
}
