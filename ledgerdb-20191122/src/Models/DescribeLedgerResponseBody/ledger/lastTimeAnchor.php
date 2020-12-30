<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeLedgerResponseBody\ledger;

use AlibabaCloud\Tea\Model;

class lastTimeAnchor extends Model
{
    /**
     * @var string
     */
    public $journalId;

    /**
     * @var string
     */
    public $ledgerVersion;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $ledgerDigest;

    /**
     * @var string
     */
    public $ledgerDigestType;

    /**
     * @var string
     */
    public $proof;
    protected $_name = [
        'journalId'        => 'JournalId',
        'ledgerVersion'    => 'LedgerVersion',
        'timeStamp'        => 'TimeStamp',
        'ledgerDigest'     => 'LedgerDigest',
        'ledgerDigestType' => 'LedgerDigestType',
        'proof'            => 'Proof',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->journalId) {
            $res['JournalId'] = $this->journalId;
        }
        if (null !== $this->ledgerVersion) {
            $res['LedgerVersion'] = $this->ledgerVersion;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->ledgerDigest) {
            $res['LedgerDigest'] = $this->ledgerDigest;
        }
        if (null !== $this->ledgerDigestType) {
            $res['LedgerDigestType'] = $this->ledgerDigestType;
        }
        if (null !== $this->proof) {
            $res['Proof'] = $this->proof;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lastTimeAnchor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JournalId'])) {
            $model->journalId = $map['JournalId'];
        }
        if (isset($map['LedgerVersion'])) {
            $model->ledgerVersion = $map['LedgerVersion'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['LedgerDigest'])) {
            $model->ledgerDigest = $map['LedgerDigest'];
        }
        if (isset($map['LedgerDigestType'])) {
            $model->ledgerDigestType = $map['LedgerDigestType'];
        }
        if (isset($map['Proof'])) {
            $model->proof = $map['Proof'];
        }

        return $model;
    }
}
