<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class RejectUserRequest extends Model
{
    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'bid'      => 'Bid',
        'bizid'    => 'Bizid',
        'reason'   => 'Reason',
        'userName' => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RejectUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
