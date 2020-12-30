<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class DeleteMemberRequest extends Model
{
    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $memberId;
    protected $_name = [
        'ledgerId' => 'LedgerId',
        'memberId' => 'MemberId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        return $model;
    }
}
