<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models;

use AlibabaCloud\Dara\Model;

class DescribeChatMessageRequest extends Model
{
    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $timezone;
    protected $_name = [
        'query' => 'Query',
        'regionId' => 'RegionId',
        'sessionId' => 'SessionId',
        'timezone' => 'Timezone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
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
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        return $model;
    }
}
