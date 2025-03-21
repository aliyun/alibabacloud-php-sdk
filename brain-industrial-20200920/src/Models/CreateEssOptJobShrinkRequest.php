<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class CreateEssOptJobShrinkRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $elecPriceShrink;

    /**
     * @example FIFTEEN_MIN
     *
     * @var string
     */
    public $freq;

    /**
     * @var string
     */
    public $genPriceShrink;

    /**
     * @var string
     */
    public $locationShrink;

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
     * @var string
     */
    public $systemDataShrink;

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
        'duration' => 'Duration',
        'elecPriceShrink' => 'ElecPrice',
        'freq' => 'Freq',
        'genPriceShrink' => 'GenPrice',
        'locationShrink' => 'Location',
        'modelVersion' => 'ModelVersion',
        'runDate' => 'RunDate',
        'systemDataShrink' => 'SystemData',
        'timeZone' => 'TimeZone',
        'topoType' => 'TopoType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->elecPriceShrink) {
            $res['ElecPrice'] = $this->elecPriceShrink;
        }
        if (null !== $this->freq) {
            $res['Freq'] = $this->freq;
        }
        if (null !== $this->genPriceShrink) {
            $res['GenPrice'] = $this->genPriceShrink;
        }
        if (null !== $this->locationShrink) {
            $res['Location'] = $this->locationShrink;
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }
        if (null !== $this->runDate) {
            $res['RunDate'] = $this->runDate;
        }
        if (null !== $this->systemDataShrink) {
            $res['SystemData'] = $this->systemDataShrink;
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
     * @return CreateEssOptJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ElecPrice'])) {
            $model->elecPriceShrink = $map['ElecPrice'];
        }
        if (isset($map['Freq'])) {
            $model->freq = $map['Freq'];
        }
        if (isset($map['GenPrice'])) {
            $model->genPriceShrink = $map['GenPrice'];
        }
        if (isset($map['Location'])) {
            $model->locationShrink = $map['Location'];
        }
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }
        if (isset($map['RunDate'])) {
            $model->runDate = $map['RunDate'];
        }
        if (isset($map['SystemData'])) {
            $model->systemDataShrink = $map['SystemData'];
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
