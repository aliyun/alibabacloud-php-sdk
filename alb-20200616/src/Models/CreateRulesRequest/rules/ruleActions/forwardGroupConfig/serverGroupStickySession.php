<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\forwardGroupConfig;

use AlibabaCloud\Tea\Model;

class serverGroupStickySession extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'enabled' => 'Enabled',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverGroupStickySession
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
