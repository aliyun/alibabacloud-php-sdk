<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\Configuration;

use AlibabaCloud\SDK\Sls\V20201230\Models\Configuration\severityConfigurations\evalCondition;
use AlibabaCloud\Tea\Model;

class severityConfigurations extends Model
{
    /**
     * @var evalCondition
     */
    public $evalCondition;

    /**
     * @var int
     */
    public $severity;
    protected $_name = [
        'evalCondition' => 'evalCondition',
        'severity'      => 'severity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evalCondition) {
            $res['evalCondition'] = null !== $this->evalCondition ? $this->evalCondition->toMap() : null;
        }
        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return severityConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['evalCondition'])) {
            $model->evalCondition = evalCondition::fromMap($map['evalCondition']);
        }
        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        return $model;
    }
}
