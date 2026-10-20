<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateFileDeepAnalyzeRequest extends Model
{
    /**
     * @var string
     */
    public $context;

    /**
     * @var int
     */
    public $eventId;

    /**
     * @var string
     */
    public $hash;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'context' => 'Context',
        'eventId' => 'EventId',
        'hash' => 'Hash',
        'source' => 'Source',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
