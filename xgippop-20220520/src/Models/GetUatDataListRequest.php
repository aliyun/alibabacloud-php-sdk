<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GetUatDataListRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $dsMonth;

    /**
     * @var string
     */
    public $itemId;
    protected $_name = [
        'aliUid'  => 'AliUid',
        'dsMonth' => 'DsMonth',
        'itemId'  => 'ItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->dsMonth) {
            $res['DsMonth'] = $this->dsMonth;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUatDataListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['DsMonth'])) {
            $model->dsMonth = $map['DsMonth'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        return $model;
    }
}
