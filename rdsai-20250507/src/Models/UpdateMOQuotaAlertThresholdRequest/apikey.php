<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateMOQuotaAlertThresholdRequest;

use AlibabaCloud\Dara\Model;

class apikey extends Model
{
    /**
     * @var string
     */
    public $apikey;

    /**
     * @var int
     */
    public $thresholdPercent;
    protected $_name = [
        'apikey' => 'Apikey',
        'thresholdPercent' => 'ThresholdPercent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apikey) {
            $res['Apikey'] = $this->apikey;
        }

        if (null !== $this->thresholdPercent) {
            $res['ThresholdPercent'] = $this->thresholdPercent;
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
        if (isset($map['Apikey'])) {
            $model->apikey = $map['Apikey'];
        }

        if (isset($map['ThresholdPercent'])) {
            $model->thresholdPercent = $map['ThresholdPercent'];
        }

        return $model;
    }
}
