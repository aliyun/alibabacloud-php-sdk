<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiToolSelectionConfig\queryRewriting;

use AlibabaCloud\Dara\Model;

class triggerConditions extends Model
{
    /**
     * @var int
     */
    public $messageCountThreshold;
    protected $_name = [
        'messageCountThreshold' => 'messageCountThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageCountThreshold) {
            $res['messageCountThreshold'] = $this->messageCountThreshold;
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
        if (isset($map['messageCountThreshold'])) {
            $model->messageCountThreshold = $map['messageCountThreshold'];
        }

        return $model;
    }
}
