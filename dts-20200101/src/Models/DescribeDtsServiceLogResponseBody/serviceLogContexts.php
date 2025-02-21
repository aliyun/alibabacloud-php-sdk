<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsServiceLogResponseBody;

use AlibabaCloud\Dara\Model;

class serviceLogContexts extends Model
{
    /**
     * @var string
     */
    public $context;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'context' => 'Context',
        'state'   => 'State',
        'time'    => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
