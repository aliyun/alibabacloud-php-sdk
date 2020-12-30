<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class DeleteLedgerRequest extends Model
{
    /**
     * @var string
     */
    public $ledgerId;
    protected $_name = [
        'ledgerId' => 'LedgerId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLedgerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }

        return $model;
    }
}
