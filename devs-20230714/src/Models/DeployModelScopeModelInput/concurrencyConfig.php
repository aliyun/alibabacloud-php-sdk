<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployModelScopeModelInput;

use AlibabaCloud\Dara\Model;

class concurrencyConfig extends Model
{
    /**
     * @var int
     */
    public $reservedConcurrency;
    protected $_name = [
        'reservedConcurrency' => 'reservedConcurrency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reservedConcurrency) {
            $res['reservedConcurrency'] = $this->reservedConcurrency;
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
        if (isset($map['reservedConcurrency'])) {
            $model->reservedConcurrency = $map['reservedConcurrency'];
        }

        return $model;
    }
}
