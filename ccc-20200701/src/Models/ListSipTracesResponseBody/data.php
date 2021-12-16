<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListSipTracesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $destinationNodeIp;

    /**
     * @var string
     */
    public $firstLine;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $sourceNodeIp;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'callId'            => 'CallId',
        'contactId'         => 'ContactId',
        'destinationNodeIp' => 'DestinationNodeIp',
        'firstLine'         => 'FirstLine',
        'payload'           => 'Payload',
        'sourceNodeIp'      => 'SourceNodeIp',
        'timestamp'         => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->destinationNodeIp) {
            $res['DestinationNodeIp'] = $this->destinationNodeIp;
        }
        if (null !== $this->firstLine) {
            $res['FirstLine'] = $this->firstLine;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->sourceNodeIp) {
            $res['SourceNodeIp'] = $this->sourceNodeIp;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['DestinationNodeIp'])) {
            $model->destinationNodeIp = $map['DestinationNodeIp'];
        }
        if (isset($map['FirstLine'])) {
            $model->firstLine = $map['FirstLine'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['SourceNodeIp'])) {
            $model->sourceNodeIp = $map['SourceNodeIp'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
