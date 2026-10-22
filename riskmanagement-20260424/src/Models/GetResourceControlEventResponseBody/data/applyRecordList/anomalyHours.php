<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventResponseBody\data\applyRecordList;

use AlibabaCloud\Dara\Model;

class anomalyHours extends Model
{
    /**
     * @var int
     */
    public $abnormalBytes;

    /**
     * @var string
     */
    public $anomalyDesc;

    /**
     * @var int
     */
    public $baselineBytes;

    /**
     * @var string
     */
    public $hour;

    /**
     * @var float
     */
    public $trafRatio;
    protected $_name = [
        'abnormalBytes' => 'AbnormalBytes',
        'anomalyDesc' => 'AnomalyDesc',
        'baselineBytes' => 'BaselineBytes',
        'hour' => 'Hour',
        'trafRatio' => 'TrafRatio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalBytes) {
            $res['AbnormalBytes'] = $this->abnormalBytes;
        }

        if (null !== $this->anomalyDesc) {
            $res['AnomalyDesc'] = $this->anomalyDesc;
        }

        if (null !== $this->baselineBytes) {
            $res['BaselineBytes'] = $this->baselineBytes;
        }

        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }

        if (null !== $this->trafRatio) {
            $res['TrafRatio'] = $this->trafRatio;
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
        if (isset($map['AbnormalBytes'])) {
            $model->abnormalBytes = $map['AbnormalBytes'];
        }

        if (isset($map['AnomalyDesc'])) {
            $model->anomalyDesc = $map['AnomalyDesc'];
        }

        if (isset($map['BaselineBytes'])) {
            $model->baselineBytes = $map['BaselineBytes'];
        }

        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }

        if (isset($map['TrafRatio'])) {
            $model->trafRatio = $map['TrafRatio'];
        }

        return $model;
    }
}
