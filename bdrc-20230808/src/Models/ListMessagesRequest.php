<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ListMessagesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $messageLevel;

    /**
     * @var int
     */
    public $messageTimeEarlierThan;

    /**
     * @var int
     */
    public $messageTimeLaterThan;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'messageLevel' => 'MessageLevel',
        'messageTimeEarlierThan' => 'MessageTimeEarlierThan',
        'messageTimeLaterThan' => 'MessageTimeLaterThan',
        'messageType' => 'MessageType',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->messageLevel) {
            $res['MessageLevel'] = $this->messageLevel;
        }

        if (null !== $this->messageTimeEarlierThan) {
            $res['MessageTimeEarlierThan'] = $this->messageTimeEarlierThan;
        }

        if (null !== $this->messageTimeLaterThan) {
            $res['MessageTimeLaterThan'] = $this->messageTimeLaterThan;
        }

        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['MessageLevel'])) {
            $model->messageLevel = $map['MessageLevel'];
        }

        if (isset($map['MessageTimeEarlierThan'])) {
            $model->messageTimeEarlierThan = $map['MessageTimeEarlierThan'];
        }

        if (isset($map['MessageTimeLaterThan'])) {
            $model->messageTimeLaterThan = $map['MessageTimeLaterThan'];
        }

        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
