<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetHistoricalCampaignReportResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $abandonedRate;

    /**
     * @var int
     */
    public $callsAbandoned;

    /**
     * @var int
     */
    public $callsConnected;

    /**
     * @var int
     */
    public $callsDialed;

    /**
     * @var float
     */
    public $connectedRate;

    /**
     * @var float
     */
    public $occupancyRate;
    protected $_name = [
        'abandonedRate' => 'AbandonedRate',
        'callsAbandoned' => 'CallsAbandoned',
        'callsConnected' => 'CallsConnected',
        'callsDialed' => 'CallsDialed',
        'connectedRate' => 'ConnectedRate',
        'occupancyRate' => 'OccupancyRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abandonedRate) {
            $res['AbandonedRate'] = $this->abandonedRate;
        }

        if (null !== $this->callsAbandoned) {
            $res['CallsAbandoned'] = $this->callsAbandoned;
        }

        if (null !== $this->callsConnected) {
            $res['CallsConnected'] = $this->callsConnected;
        }

        if (null !== $this->callsDialed) {
            $res['CallsDialed'] = $this->callsDialed;
        }

        if (null !== $this->connectedRate) {
            $res['ConnectedRate'] = $this->connectedRate;
        }

        if (null !== $this->occupancyRate) {
            $res['OccupancyRate'] = $this->occupancyRate;
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
        if (isset($map['AbandonedRate'])) {
            $model->abandonedRate = $map['AbandonedRate'];
        }

        if (isset($map['CallsAbandoned'])) {
            $model->callsAbandoned = $map['CallsAbandoned'];
        }

        if (isset($map['CallsConnected'])) {
            $model->callsConnected = $map['CallsConnected'];
        }

        if (isset($map['CallsDialed'])) {
            $model->callsDialed = $map['CallsDialed'];
        }

        if (isset($map['ConnectedRate'])) {
            $model->connectedRate = $map['ConnectedRate'];
        }

        if (isset($map['OccupancyRate'])) {
            $model->occupancyRate = $map['OccupancyRate'];
        }

        return $model;
    }
}
