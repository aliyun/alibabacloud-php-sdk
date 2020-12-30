<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class GetJournalRequest extends Model
{
    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var int
     */
    public $journalId;
    protected $_name = [
        'ledgerId'  => 'LedgerId',
        'journalId' => 'JournalId',
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
        if (null !== $this->journalId) {
            $res['JournalId'] = $this->journalId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJournalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['JournalId'])) {
            $model->journalId = $map['JournalId'];
        }

        return $model;
    }
}
