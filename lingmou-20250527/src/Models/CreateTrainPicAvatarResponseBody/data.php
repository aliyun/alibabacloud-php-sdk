<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\CreateTrainPicAvatarResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $avatarId;

    /**
     * @var int
     */
    public $expectedCompletionTime;

    /**
     * @var bool
     */
    public $pass;
    protected $_name = [
        'avatarId' => 'avatarId',
        'expectedCompletionTime' => 'expectedCompletionTime',
        'pass' => 'pass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarId) {
            $res['avatarId'] = $this->avatarId;
        }

        if (null !== $this->expectedCompletionTime) {
            $res['expectedCompletionTime'] = $this->expectedCompletionTime;
        }

        if (null !== $this->pass) {
            $res['pass'] = $this->pass;
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
        if (isset($map['avatarId'])) {
            $model->avatarId = $map['avatarId'];
        }

        if (isset($map['expectedCompletionTime'])) {
            $model->expectedCompletionTime = $map['expectedCompletionTime'];
        }

        if (isset($map['pass'])) {
            $model->pass = $map['pass'];
        }

        return $model;
    }
}
