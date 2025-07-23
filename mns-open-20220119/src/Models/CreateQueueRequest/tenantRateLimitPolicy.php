<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateQueueRequest;

use AlibabaCloud\Tea\Model;

class tenantRateLimitPolicy extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $maxReceivesPerSecond;
    protected $_name = [
        'enabled' => 'Enabled',
        'maxReceivesPerSecond' => 'MaxReceivesPerSecond',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->maxReceivesPerSecond) {
            $res['MaxReceivesPerSecond'] = $this->maxReceivesPerSecond;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantRateLimitPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['MaxReceivesPerSecond'])) {
            $model->maxReceivesPerSecond = $map['MaxReceivesPerSecond'];
        }

        return $model;
    }
}
