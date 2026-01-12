<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiToolSelectionConfig;

use AlibabaCloud\Dara\Model;

class enableConditions extends Model
{
    /**
     * @var int
     */
    public $toolCountThreshold;
    protected $_name = [
        'toolCountThreshold' => 'toolCountThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->toolCountThreshold) {
            $res['toolCountThreshold'] = $this->toolCountThreshold;
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
        if (isset($map['toolCountThreshold'])) {
            $model->toolCountThreshold = $map['toolCountThreshold'];
        }

        return $model;
    }
}
