<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkSQLEngineStateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $jars;

    /**
     * @var string
     */
    public $maxExecutor;

    /**
     * @var string
     */
    public $minExecutor;

    /**
     * @var string
     */
    public $slotNum;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $submittedTimeInMillis;
    protected $_name = [
        'appId' => 'AppId',
        'config' => 'Config',
        'jars' => 'Jars',
        'maxExecutor' => 'MaxExecutor',
        'minExecutor' => 'MinExecutor',
        'slotNum' => 'SlotNum',
        'state' => 'State',
        'submittedTimeInMillis' => 'SubmittedTimeInMillis',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->jars) {
            $res['Jars'] = $this->jars;
        }

        if (null !== $this->maxExecutor) {
            $res['MaxExecutor'] = $this->maxExecutor;
        }

        if (null !== $this->minExecutor) {
            $res['MinExecutor'] = $this->minExecutor;
        }

        if (null !== $this->slotNum) {
            $res['SlotNum'] = $this->slotNum;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->submittedTimeInMillis) {
            $res['SubmittedTimeInMillis'] = $this->submittedTimeInMillis;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['Jars'])) {
            $model->jars = $map['Jars'];
        }

        if (isset($map['MaxExecutor'])) {
            $model->maxExecutor = $map['MaxExecutor'];
        }

        if (isset($map['MinExecutor'])) {
            $model->minExecutor = $map['MinExecutor'];
        }

        if (isset($map['SlotNum'])) {
            $model->slotNum = $map['SlotNum'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['SubmittedTimeInMillis'])) {
            $model->submittedTimeInMillis = $map['SubmittedTimeInMillis'];
        }

        return $model;
    }
}
