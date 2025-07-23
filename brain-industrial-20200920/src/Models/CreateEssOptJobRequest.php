<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest\elecPrice;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest\genPrice;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest\location;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest\systemData;
use AlibabaCloud\Tea\Model;

class CreateEssOptJobRequest extends Model
{
    /**
     * @var string
     */
    public $businessKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @var elecPrice[]
     */
    public $elecPrice;

    /**
     * @example FIFTEEN_MIN
     *
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
     * @example latest
     *
     * @var string
     */
    public $modelVersion;

    /**
     * @example 2025-02-12
     *
     * @var string
     */
    public $runDate;

    /**
     * @var systemData[]
     */
    public $systemData;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;

    /**
     * @example LOAD_ESS_SOLAR
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessKey) {
            $res['BusinessKey'] = $this->businessKey;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->elecPrice) {
            $res['ElecPrice'] = [];
            if (null !== $this->elecPrice && \is_array($this->elecPrice)) {
                $n = 0;
                foreach ($this->elecPrice as $item) {
                    $res['ElecPrice'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->freq) {
            $res['Freq'] = $this->freq;
        }
        if (null !== $this->genPrice) {
            $res['GenPrice'] = [];
            if (null !== $this->genPrice && \is_array($this->genPrice)) {
                $n = 0;
                foreach ($this->genPrice as $item) {
                    $res['GenPrice'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }
        if (null !== $this->runDate) {
            $res['RunDate'] = $this->runDate;
        }
        if (null !== $this->systemData) {
            $res['SystemData'] = [];
            if (null !== $this->systemData && \is_array($this->systemData)) {
                $n = 0;
                foreach ($this->systemData as $item) {
                    $res['SystemData'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CreateEssOptJobRequest
     */
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
                $n = 0;
                foreach ($map['ElecPrice'] as $item) {
                    $model->elecPrice[$n++] = null !== $item ? elecPrice::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Freq'])) {
            $model->freq = $map['Freq'];
        }
        if (isset($map['GenPrice'])) {
            if (!empty($map['GenPrice'])) {
                $model->genPrice = [];
                $n = 0;
                foreach ($map['GenPrice'] as $item) {
                    $model->genPrice[$n++] = null !== $item ? genPrice::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['SystemData'] as $item) {
                    $model->systemData[$n++] = null !== $item ? systemData::fromMap($item) : $item;
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
