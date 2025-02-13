<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateVideoConferenceResponseBody extends Model
{
    /**
     * @var string
     */
    public $conferenceId;
    /**
     * @var string
     */
    public $conferencePassword;
    /**
     * @var string
     */
    public $externalLinkUrl;
    /**
     * @var string
     */
    public $hostPassword;
    /**
     * @var string[]
     */
    public $phoneNumbers;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $roomCode;
    protected $_name = [
        'conferenceId'       => 'conferenceId',
        'conferencePassword' => 'conferencePassword',
        'externalLinkUrl'    => 'externalLinkUrl',
        'hostPassword'       => 'hostPassword',
        'phoneNumbers'       => 'phoneNumbers',
        'requestId'          => 'requestId',
        'roomCode'           => 'roomCode',
    ];

    public function validate()
    {
        if (\is_array($this->phoneNumbers)) {
            Model::validateArray($this->phoneNumbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }

        if (null !== $this->conferencePassword) {
            $res['conferencePassword'] = $this->conferencePassword;
        }

        if (null !== $this->externalLinkUrl) {
            $res['externalLinkUrl'] = $this->externalLinkUrl;
        }

        if (null !== $this->hostPassword) {
            $res['hostPassword'] = $this->hostPassword;
        }

        if (null !== $this->phoneNumbers) {
            if (\is_array($this->phoneNumbers)) {
                $res['phoneNumbers'] = [];
                $n1                  = 0;
                foreach ($this->phoneNumbers as $item1) {
                    $res['phoneNumbers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->roomCode) {
            $res['roomCode'] = $this->roomCode;
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
        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        if (isset($map['conferencePassword'])) {
            $model->conferencePassword = $map['conferencePassword'];
        }

        if (isset($map['externalLinkUrl'])) {
            $model->externalLinkUrl = $map['externalLinkUrl'];
        }

        if (isset($map['hostPassword'])) {
            $model->hostPassword = $map['hostPassword'];
        }

        if (isset($map['phoneNumbers'])) {
            if (!empty($map['phoneNumbers'])) {
                $model->phoneNumbers = [];
                $n1                  = 0;
                foreach ($map['phoneNumbers'] as $item1) {
                    $model->phoneNumbers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['roomCode'])) {
            $model->roomCode = $map['roomCode'];
        }

        return $model;
    }
}
