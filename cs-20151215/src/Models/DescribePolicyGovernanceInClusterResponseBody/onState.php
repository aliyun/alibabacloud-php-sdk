<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody;

use AlibabaCloud\Dara\Model;

class onState extends Model
{
    /**
     * @var int
     */
    public $enabledCount;
    /**
     * @var string
     */
    public $severity;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'enabledCount' => 'enabled_count',
        'severity'     => 'severity',
        'total'        => 'total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabledCount) {
            $res['enabled_count'] = $this->enabledCount;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['enabled_count'])) {
            $model->enabledCount = $map['enabled_count'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
