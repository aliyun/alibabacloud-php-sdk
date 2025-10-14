<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDetectionRulesResponseBody\detectionRules;

use AlibabaCloud\Dara\Model;

class playbook extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $flow;
    protected $_name = [
        'config' => 'Config',
        'flow' => 'Flow',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }

        return $model;
    }
}
