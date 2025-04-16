<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class QuotaJob extends Model
{
    /**
     * @var int
     */
    public $queuing;

    /**
     * @var int
     */
    public $running;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'queuing' => 'Queuing',
        'running' => 'Running',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queuing) {
            $res['Queuing'] = $this->queuing;
        }

        if (null !== $this->running) {
            $res['Running'] = $this->running;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Queuing'])) {
            $model->queuing = $map['Queuing'];
        }

        if (isset($map['Running'])) {
            $model->running = $map['Running'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
