<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\LoadAgentSessionRequest\params;

use AlibabaCloud\Dara\Model;

class meta extends Model
{
    /**
     * @var int
     */
    public $beginLogOffset;

    /**
     * @var bool
     */
    public $isReload;
    protected $_name = [
        'beginLogOffset' => 'BeginLogOffset',
        'isReload' => 'IsReload',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginLogOffset) {
            $res['BeginLogOffset'] = $this->beginLogOffset;
        }

        if (null !== $this->isReload) {
            $res['IsReload'] = $this->isReload;
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
        if (isset($map['BeginLogOffset'])) {
            $model->beginLogOffset = $map['BeginLogOffset'];
        }

        if (isset($map['IsReload'])) {
            $model->isReload = $map['IsReload'];
        }

        return $model;
    }
}
