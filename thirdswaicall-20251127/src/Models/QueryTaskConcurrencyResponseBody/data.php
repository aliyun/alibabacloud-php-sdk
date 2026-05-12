<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ThirdswAicall\V20251127\Models\QueryTaskConcurrencyResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $availableConcurrency;

    /**
     * @var int
     */
    public $currentConcurrency;

    /**
     * @var int
     */
    public $maxConcurrency;
    protected $_name = [
        'availableConcurrency' => 'AvailableConcurrency',
        'currentConcurrency' => 'CurrentConcurrency',
        'maxConcurrency' => 'MaxConcurrency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableConcurrency) {
            $res['AvailableConcurrency'] = $this->availableConcurrency;
        }

        if (null !== $this->currentConcurrency) {
            $res['CurrentConcurrency'] = $this->currentConcurrency;
        }

        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
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
        if (isset($map['AvailableConcurrency'])) {
            $model->availableConcurrency = $map['AvailableConcurrency'];
        }

        if (isset($map['CurrentConcurrency'])) {
            $model->currentConcurrency = $map['CurrentConcurrency'];
        }

        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }

        return $model;
    }
}
