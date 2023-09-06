<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoConferenceResponseBody extends Model
{
    /**
     * @example 607452e01401526ee39609e1
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @example 1151302294
     *
     * @var string
     */
    public $conferencePassword;

    /**
     * @example https://pre-meeting.dingtalk.com/app?roomCode=68550708396&token=1_59209c43-431c-4e57-a0f8-11bebdb3db7f
     *
     * @var string
     */
    public $externalLinkUrl;

    /**
     * @example 2142817614
     *
     * @var string
     */
    public $hostPassword;

    /**
     * @var string[]
     */
    public $phoneNumbers;

    /**
     * @description requestId
     *
     * @example 3032809F-8C14-57E2-9B76-7AC2134FE3C8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 123
     *
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
    }

    public function toMap()
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
            $res['phoneNumbers'] = $this->phoneNumbers;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->roomCode) {
            $res['roomCode'] = $this->roomCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoConferenceResponseBody
     */
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
                $model->phoneNumbers = $map['phoneNumbers'];
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
