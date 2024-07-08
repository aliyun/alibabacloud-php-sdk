<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemRequest;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableOplock) {
            $res['EnableOplock'] = $this->enableOplock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableOplock'])) {
            $model->enableOplock = $map['EnableOplock'];
        }

        return $model;
    }
}
