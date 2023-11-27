<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendCustomMessageRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @example Hello,World
     *
     * @var string
     */
    public $body;

    /**
     * @example 7m***q
     *
     * @var string
     */
    public $domain;

    /**
     * @example 9645**c180a1
     *
     * @var string
     */
    public $roomId;

    /**
     * @example 62**59
     *
     * @var string
     */
    public $senderId;

    /**
     * @example 100001
     *
     * @var int
     */
    public $subType;
    protected $_name = [
        'body'     => 'Body',
        'domain'   => 'Domain',
        'roomId'   => 'RoomId',
        'senderId' => 'SenderId',
        'subType'  => 'SubType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}
