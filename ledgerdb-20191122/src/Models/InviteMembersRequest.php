<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class InviteMembersRequest extends Model
{
    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $aliUids;
    protected $_name = [
        'ledgerId' => 'LedgerId',
        'aliUids'  => 'AliUids',
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
        if (null !== $this->aliUids) {
            $res['AliUids'] = $this->aliUids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InviteMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['AliUids'])) {
            $model->aliUids = $map['AliUids'];
        }

        return $model;
    }
}
