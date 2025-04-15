<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class WebWAFConfig extends Model
{
    /**
     * @var bool
     */
    public $enableWAF;
    protected $_name = [
        'enableWAF' => 'EnableWAF',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableWAF) {
            $res['EnableWAF'] = $this->enableWAF;
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
        if (isset($map['EnableWAF'])) {
            $model->enableWAF = $map['EnableWAF'];
        }

        return $model;
    }
}
