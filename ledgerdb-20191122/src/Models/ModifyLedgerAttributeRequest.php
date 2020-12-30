<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class ModifyLedgerAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $ledgerName;

    /**
     * @var string
     */
    public $ledgerDescription;
    protected $_name = [
        'ledgerId'          => 'LedgerId',
        'ledgerName'        => 'LedgerName',
        'ledgerDescription' => 'LedgerDescription',
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
        if (null !== $this->ledgerName) {
            $res['LedgerName'] = $this->ledgerName;
        }
        if (null !== $this->ledgerDescription) {
            $res['LedgerDescription'] = $this->ledgerDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLedgerAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['LedgerName'])) {
            $model->ledgerName = $map['LedgerName'];
        }
        if (isset($map['LedgerDescription'])) {
            $model->ledgerDescription = $map['LedgerDescription'];
        }

        return $model;
    }
}
