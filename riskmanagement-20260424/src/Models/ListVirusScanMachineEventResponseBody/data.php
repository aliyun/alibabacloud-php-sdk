<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\ListVirusScanMachineEventResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\ListVirusScanMachineEventResponseBody\data\virusScanLatestTaskStatistic;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\ListVirusScanMachineEventResponseBody\data\virusScanMachineEventList;

class data extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var virusScanLatestTaskStatistic
     */
    public $virusScanLatestTaskStatistic;

    /**
     * @var virusScanMachineEventList
     */
    public $virusScanMachineEventList;
    protected $_name = [
        'requestId' => 'RequestId',
        'virusScanLatestTaskStatistic' => 'VirusScanLatestTaskStatistic',
        'virusScanMachineEventList' => 'VirusScanMachineEventList',
    ];

    public function validate()
    {
        if (null !== $this->virusScanLatestTaskStatistic) {
            $this->virusScanLatestTaskStatistic->validate();
        }
        if (null !== $this->virusScanMachineEventList) {
            $this->virusScanMachineEventList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->virusScanLatestTaskStatistic) {
            $res['VirusScanLatestTaskStatistic'] = null !== $this->virusScanLatestTaskStatistic ? $this->virusScanLatestTaskStatistic->toArray($noStream) : $this->virusScanLatestTaskStatistic;
        }

        if (null !== $this->virusScanMachineEventList) {
            $res['VirusScanMachineEventList'] = null !== $this->virusScanMachineEventList ? $this->virusScanMachineEventList->toArray($noStream) : $this->virusScanMachineEventList;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VirusScanLatestTaskStatistic'])) {
            $model->virusScanLatestTaskStatistic = virusScanLatestTaskStatistic::fromMap($map['VirusScanLatestTaskStatistic']);
        }

        if (isset($map['VirusScanMachineEventList'])) {
            $model->virusScanMachineEventList = virusScanMachineEventList::fromMap($map['VirusScanMachineEventList']);
        }

        return $model;
    }
}
