<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class GetCronExecTimeRequest extends Model
{
    /**
     * @var string
     */
    public $cronRule;
    protected $_name = [
        'cronRule' => 'cronRule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronRule) {
            $res['cronRule'] = $this->cronRule;
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
        if (isset($map['cronRule'])) {
            $model->cronRule = $map['cronRule'];
        }

        return $model;
    }
}
