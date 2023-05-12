<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class EditNewBuyStatusRequest extends Model
{
    /**
     * @example cancelBan
     *
     * @var string
     */
    public $newBuyStatus;

    /**
     * @example 1133166938931507
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'newBuyStatus' => 'NewBuyStatus',
        'uid'          => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newBuyStatus) {
            $res['NewBuyStatus'] = $this->newBuyStatus;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditNewBuyStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewBuyStatus'])) {
            $model->newBuyStatus = $map['NewBuyStatus'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
