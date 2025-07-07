<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;

class EnterpriseAccountQueryAccountsInfoRequest extends Model
{
    /**
     * @var string
     */
    public $encryptTicket;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orientedEcId;

    /**
     * @var string
     */
    public $orientedLeId;

    /**
     * @var string
     */
    public $orientedNbId;

    /**
     * @var string
     */
    public $pksJson;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $showCompleteInfo;
    protected $_name = [
        'encryptTicket' => 'EncryptTicket',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orientedEcId' => 'OrientedEcId',
        'orientedLeId' => 'OrientedLeId',
        'orientedNbId' => 'OrientedNbId',
        'pksJson' => 'PksJson',
        'requestId' => 'RequestId',
        'showCompleteInfo' => 'ShowCompleteInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptTicket) {
            $res['EncryptTicket'] = $this->encryptTicket;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orientedEcId) {
            $res['OrientedEcId'] = $this->orientedEcId;
        }

        if (null !== $this->orientedLeId) {
            $res['OrientedLeId'] = $this->orientedLeId;
        }

        if (null !== $this->orientedNbId) {
            $res['OrientedNbId'] = $this->orientedNbId;
        }

        if (null !== $this->pksJson) {
            $res['PksJson'] = $this->pksJson;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->showCompleteInfo) {
            $res['ShowCompleteInfo'] = $this->showCompleteInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptTicket'])) {
            $model->encryptTicket = $map['EncryptTicket'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrientedEcId'])) {
            $model->orientedEcId = $map['OrientedEcId'];
        }

        if (isset($map['OrientedLeId'])) {
            $model->orientedLeId = $map['OrientedLeId'];
        }

        if (isset($map['OrientedNbId'])) {
            $model->orientedNbId = $map['OrientedNbId'];
        }

        if (isset($map['PksJson'])) {
            $model->pksJson = $map['PksJson'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ShowCompleteInfo'])) {
            $model->showCompleteInfo = $map['ShowCompleteInfo'];
        }

        return $model;
    }
}
