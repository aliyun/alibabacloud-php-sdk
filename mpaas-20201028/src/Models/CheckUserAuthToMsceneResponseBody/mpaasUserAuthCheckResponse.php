<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\CheckUserAuthToMsceneResponseBody;

use AlibabaCloud\Dara\Model;

class mpaasUserAuthCheckResponse extends Model
{
    /**
     * @var bool
     */
    public $matched;
    protected $_name = [
        'matched' => 'Matched',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matched) {
            $res['Matched'] = $this->matched;
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
        if (isset($map['Matched'])) {
            $model->matched = $map['Matched'];
        }

        return $model;
    }
}
