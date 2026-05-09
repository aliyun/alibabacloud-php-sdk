<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ThirdswAicall\V20251127\Models\QueryTaskConcurrencyResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $currentConcurrency;
    protected $_name = [
        'currentConcurrency' => 'CurrentConcurrency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentConcurrency) {
            $res['CurrentConcurrency'] = $this->currentConcurrency;
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
        if (isset($map['CurrentConcurrency'])) {
            $model->currentConcurrency = $map['CurrentConcurrency'];
        }

        return $model;
    }
}
