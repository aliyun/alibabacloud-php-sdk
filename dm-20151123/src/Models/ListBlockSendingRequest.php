<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class ListBlockSendingRequest extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $blockEmail;

    /**
     * @var string
     */
    public $blockType;

    /**
     * @var int
     */
    public $endTime;

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
    public $senderEmail;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'blockEmail' => 'BlockEmail',
        'blockType' => 'BlockType',
        'endTime' => 'EndTime',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'senderEmail' => 'SenderEmail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->blockEmail) {
            $res['BlockEmail'] = $this->blockEmail;
        }

        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->senderEmail) {
            $res['SenderEmail'] = $this->senderEmail;
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
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['BlockEmail'])) {
            $model->blockEmail = $map['BlockEmail'];
        }

        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['SenderEmail'])) {
            $model->senderEmail = $map['SenderEmail'];
        }

        return $model;
    }
}
