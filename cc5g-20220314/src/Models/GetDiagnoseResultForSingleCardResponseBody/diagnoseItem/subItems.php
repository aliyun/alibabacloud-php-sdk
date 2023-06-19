<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\GetDiagnoseResultForSingleCardResponseBody\diagnoseItem;

use AlibabaCloud\Tea\Model;

class subItems extends Model
{
    /**
     * @example CardStatus
     *
     * @var string
     */
    public $subItem;

    /**
     * @example Card status is real-time
     *
     * @var string
     */
    public $subItemInfo;

    /**
     * @example Normal
     *
     * @var string
     */
    public $subItemStatus;
    protected $_name = [
        'subItem'       => 'SubItem',
        'subItemInfo'   => 'SubItemInfo',
        'subItemStatus' => 'SubItemStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subItem) {
            $res['SubItem'] = $this->subItem;
        }
        if (null !== $this->subItemInfo) {
            $res['SubItemInfo'] = $this->subItemInfo;
        }
        if (null !== $this->subItemStatus) {
            $res['SubItemStatus'] = $this->subItemStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubItem'])) {
            $model->subItem = $map['SubItem'];
        }
        if (isset($map['SubItemInfo'])) {
            $model->subItemInfo = $map['SubItemInfo'];
        }
        if (isset($map['SubItemStatus'])) {
            $model->subItemStatus = $map['SubItemStatus'];
        }

        return $model;
    }
}
