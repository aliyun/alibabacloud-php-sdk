<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest\elecPrice;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest\genPrice;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest\location;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest\systemData;

class CreateEssOptJobRequest extends Model
{
    /**
     * @var string
     */
    public $businessKey;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var elecPrice[]
     */
    public $elecPrice;

    /**
     * @var string
     */
    public $freq;

    /**
     * @var genPrice[]
     */
    public $genPrice;

    /**
     * @var location
     */
    public $location;

    /**
     * @var string
     */
    public $modelVersion;

    /**
     * @var string
     */
    public $runDate;

    /**
     * @var systemData[]
     */
    public $systemData;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $topoType;
    protected $_name = [
        'businessKey' => 'BusinessKey',
        'duration' => 'Duration',
        'elecPrice' => 'ElecPrice',
        'freq' => 'Freq',
        'genPrice' => 'GenPrice',
        'location' => 'Location',
        'modelVersion' => 'ModelVersion',
        'runDate' => 'RunDate',
        'systemData' => 'SystemData',
        'timeZone' => 'TimeZone',
        'topoType' => 'TopoType',
    ];

    public function validate()
    {
        if (\is_array($this->elecPrice)) {
            Model::validateArray($this->elecPrice);
        }
        if (\is_array($this->genPrice)) {
            Model::validateArray($this->genPrice);
        }
        if (null !== $this->location) {
            $this->location->validate();
        }
        if (\is_array($this->systemData)) {
            Model::validateArray($this->systemData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessKey) {
            $res['BusinessKey'] = $this->businessKey;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->elecPrice) {
            if (\is_array($this->elecPrice)) {
                $res['ElecPrice'] = [];
                $n1 = 0;
                foreach ($this->elecPrice as $item1) {
                    $res['ElecPrice'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->freq) {
            $res['Freq'] = $this->freq;
        }

        if (null !== $this->genPrice) {
            if (\is_array($this->genPrice)) {
                $res['GenPrice'] = [];
                $n1 = 0;
                foreach ($this->genPrice as $item1) {
                    $res['GenPrice'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toArray($noStream) : $this->location;
        }

        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }

        if (null !== $this->runDate) {
            $res['RunDate'] = $this->runDate;
        }

        if (null !== $this->systemData) {
            if (\is_array($this->systemData)) {
                $res['SystemData'] = [];
                $n1 = 0;
                foreach ($this->systemData as $item1) {
                    $res['SystemData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        if (null !== $this->topoType) {
            $res['TopoType'] = $this->topoType;
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
        if (isset($map['BusinessKey'])) {
            $model->businessKey = $map['BusinessKey'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['ElecPrice'])) {
            if (!empty($map['ElecPrice'])) {
                $model->elecPrice = [];
                $n1 = 0;
                foreach ($map['ElecPrice'] as $item1) {
                    $model->elecPrice[$n1] = elecPrice::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Freq'])) {
            $model->freq = $map['Freq'];
        }

        if (isset($map['GenPrice'])) {
            if (!empty($map['GenPrice'])) {
                $model->genPrice = [];
                $n1 = 0;
                foreach ($map['GenPrice'] as $item1) {
                    $model->genPrice[$n1] = genPrice::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }

        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }

        if (isset($map['RunDate'])) {
            $model->runDate = $map['RunDate'];
        }

        if (isset($map['SystemData'])) {
            if (!empty($map['SystemData'])) {
                $model->systemData = [];
                $n1 = 0;
                foreach ($map['SystemData'] as $item1) {
                    $model->systemData[$n1] = systemData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        if (isset($map['TopoType'])) {
            $model->topoType = $map['TopoType'];
        }

        return $model;
    }
}
