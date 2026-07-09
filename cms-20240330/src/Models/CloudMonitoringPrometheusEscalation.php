<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CloudMonitoringPrometheusEscalation extends Model
{
    /**
     * @var string
     */
    public $promQl;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'promQl' => 'promQl',
        'severity' => 'severity',
        'times' => 'times',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promQl) {
            $res['promQl'] = $this->promQl;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->times) {
            $res['times'] = $this->times;
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
        if (isset($map['promQl'])) {
            $model->promQl = $map['promQl'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['times'])) {
            $model->times = $map['times'];
        }

        return $model;
    }
}
