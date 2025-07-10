<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetSubscriptionAttributesRequest;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
