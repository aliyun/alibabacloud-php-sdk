<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ConsumeProcessorConfiguration extends Model
{
    /**
     * @var string
     */
    public $spl;
    protected $_name = [
        'spl' => 'spl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->spl) {
            $res['spl'] = $this->spl;
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
        if (isset($map['spl'])) {
            $model->spl = $map['spl'];
        }

        return $model;
    }
}
