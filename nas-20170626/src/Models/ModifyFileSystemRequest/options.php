<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemRequest;

use AlibabaCloud\Dara\Model;

class options extends Model
{
    /**
     * @var bool
     */
    public $enableOplock;
    protected $_name = [
        'enableOplock' => 'EnableOplock',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableOplock) {
            $res['EnableOplock'] = $this->enableOplock;
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
        if (isset($map['EnableOplock'])) {
            $model->enableOplock = $map['EnableOplock'];
        }

        return $model;
    }
}
