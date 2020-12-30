<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListJournalsResponseBody;

use AlibabaCloud\Tea\Model;

class journals extends Model
{
    /**
     * @var string
     */
    public $journalId;

    /**
     * @var string[]
     */
    public $clues;

    /**
     * @var string
     */
    public $payloadJsonString;

    /**
     * @var string
     */
    public $journalHash;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $payloadType;

    /**
     * @var string
     */
    public $clientId;
    protected $_name = [
        'journalId'         => 'JournalId',
        'clues'             => 'Clues',
        'payloadJsonString' => 'PayloadJsonString',
        'journalHash'       => 'JournalHash',
        'timestamp'         => 'Timestamp',
        'ledgerId'          => 'LedgerId',
        'memberId'          => 'MemberId',
        'payloadType'       => 'PayloadType',
        'clientId'          => 'ClientId',
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
        if (null !== $this->clues) {
            $res['Clues'] = $this->clues;
        }
        if (null !== $this->payloadJsonString) {
            $res['PayloadJsonString'] = $this->payloadJsonString;
        }
        if (null !== $this->journalHash) {
            $res['JournalHash'] = $this->journalHash;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->payloadType) {
            $res['PayloadType'] = $this->payloadType;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return journals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JournalId'])) {
            $model->journalId = $map['JournalId'];
        }
        if (isset($map['Clues'])) {
            if (!empty($map['Clues'])) {
                $model->clues = $map['Clues'];
            }
        }
        if (isset($map['PayloadJsonString'])) {
            $model->payloadJsonString = $map['PayloadJsonString'];
        }
        if (isset($map['JournalHash'])) {
            $model->journalHash = $map['JournalHash'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['PayloadType'])) {
            $model->payloadType = $map['PayloadType'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        return $model;
    }
}
