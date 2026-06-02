<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesTextResponseBody\paragraphList;

use AlibabaCloud\Dara\Model;

class speakerDisplay extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $nickName;
    protected $_name = [
        'avatarUrl' => 'avatarUrl',
        'nickName' => 'nickName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->nickName) {
            $res['nickName'] = $this->nickName;
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
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }

        if (isset($map['nickName'])) {
            $model->nickName = $map['nickName'];
        }

        return $model;
    }
}
