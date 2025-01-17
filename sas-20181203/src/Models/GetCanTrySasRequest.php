<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetCanTrySasRequest extends Model
{
    /**
     * @var bool
     */
    public $fromEcs;
    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'fromEcs' => 'FromEcs',
        'lang'    => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromEcs) {
            $res['FromEcs'] = $this->fromEcs;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['FromEcs'])) {
            $model->fromEcs = $map['FromEcs'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
