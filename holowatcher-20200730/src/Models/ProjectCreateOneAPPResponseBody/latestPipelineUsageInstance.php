<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOneAPPResponseBody;

use AlibabaCloud\Tea\Model;

class latestPipelineUsageInstance extends Model
{
    /**
     * @var string
     */
    public $APPENDPUBLISH;

    /**
     * @var string
     */
    public $HIGHMODELBUILD;

    /**
     * @var string
     */
    public $MIRRORANNOTATION;

    /**
     * @var string
     */
    public $MODELREBUILDPUB;

    /**
     * @var string
     */
    public $MODELREPLACE;

    /**
     * @var string
     */
    public $MODELREPLACENODATASET;

    /**
     * @var string
     */
    public $OSSCOVER;

    /**
     * @var string
     */
    public $PTZMODELREBUILDPUB;

    /**
     * @var string
     */
    public $PUBLISH;

    /**
     * @var string
     */
    public $REBUID;
    protected $_name = [
        'APPENDPUBLISH'         => 'APPENDPUBLISH',
        'HIGHMODELBUILD'        => 'HIGHMODELBUILD',
        'MIRRORANNOTATION'      => 'MIRRORANNOTATION',
        'MODELREBUILDPUB'       => 'MODELREBUILDPUB',
        'MODELREPLACE'          => 'MODELREPLACE',
        'MODELREPLACENODATASET' => 'MODELREPLACENODATASET',
        'OSSCOVER'              => 'OSSCOVER',
        'PTZMODELREBUILDPUB'    => 'PTZMODELREBUILDPUB',
        'PUBLISH'               => 'PUBLISH',
        'REBUID'                => 'REBUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->APPENDPUBLISH) {
            $res['APPENDPUBLISH'] = $this->APPENDPUBLISH;
        }
        if (null !== $this->HIGHMODELBUILD) {
            $res['HIGHMODELBUILD'] = $this->HIGHMODELBUILD;
        }
        if (null !== $this->MIRRORANNOTATION) {
            $res['MIRRORANNOTATION'] = $this->MIRRORANNOTATION;
        }
        if (null !== $this->MODELREBUILDPUB) {
            $res['MODELREBUILDPUB'] = $this->MODELREBUILDPUB;
        }
        if (null !== $this->MODELREPLACE) {
            $res['MODELREPLACE'] = $this->MODELREPLACE;
        }
        if (null !== $this->MODELREPLACENODATASET) {
            $res['MODELREPLACENODATASET'] = $this->MODELREPLACENODATASET;
        }
        if (null !== $this->OSSCOVER) {
            $res['OSSCOVER'] = $this->OSSCOVER;
        }
        if (null !== $this->PTZMODELREBUILDPUB) {
            $res['PTZMODELREBUILDPUB'] = $this->PTZMODELREBUILDPUB;
        }
        if (null !== $this->PUBLISH) {
            $res['PUBLISH'] = $this->PUBLISH;
        }
        if (null !== $this->REBUID) {
            $res['REBUID'] = $this->REBUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return latestPipelineUsageInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APPENDPUBLISH'])) {
            $model->APPENDPUBLISH = $map['APPENDPUBLISH'];
        }
        if (isset($map['HIGHMODELBUILD'])) {
            $model->HIGHMODELBUILD = $map['HIGHMODELBUILD'];
        }
        if (isset($map['MIRRORANNOTATION'])) {
            $model->MIRRORANNOTATION = $map['MIRRORANNOTATION'];
        }
        if (isset($map['MODELREBUILDPUB'])) {
            $model->MODELREBUILDPUB = $map['MODELREBUILDPUB'];
        }
        if (isset($map['MODELREPLACE'])) {
            $model->MODELREPLACE = $map['MODELREPLACE'];
        }
        if (isset($map['MODELREPLACENODATASET'])) {
            $model->MODELREPLACENODATASET = $map['MODELREPLACENODATASET'];
        }
        if (isset($map['OSSCOVER'])) {
            $model->OSSCOVER = $map['OSSCOVER'];
        }
        if (isset($map['PTZMODELREBUILDPUB'])) {
            $model->PTZMODELREBUILDPUB = $map['PTZMODELREBUILDPUB'];
        }
        if (isset($map['PUBLISH'])) {
            $model->PUBLISH = $map['PUBLISH'];
        }
        if (isset($map['REBUID'])) {
            $model->REBUID = $map['REBUID'];
        }

        return $model;
    }
}
