<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchKeywordHeaders;

use AlibabaCloud\Dara\Model;

class accountContext extends Model
{
    /**
     * @var string
     */
    public $userToken;
    protected $_name = [
        'userToken' => 'userToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userToken) {
            $res['userToken'] = $this->userToken;
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
        if (isset($map['userToken'])) {
            $model->userToken = $map['userToken'];
        }

        return $model;
    }
}
