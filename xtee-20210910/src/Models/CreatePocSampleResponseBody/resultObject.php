<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\CreatePocSampleResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var bool
     */
    public $hasWarnings;

    /**
     * @var int
     */
    public $sampleId;

    /**
     * @var string
     */
    public $sampleName;

    /**
     * @var string
     */
    public $tab;

    /**
     * @var string
     */
    public $warningMessage;
    protected $_name = [
        'hasWarnings' => 'HasWarnings',
        'sampleId' => 'SampleId',
        'sampleName' => 'SampleName',
        'tab' => 'Tab',
        'warningMessage' => 'WarningMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasWarnings) {
            $res['HasWarnings'] = $this->hasWarnings;
        }

        if (null !== $this->sampleId) {
            $res['SampleId'] = $this->sampleId;
        }

        if (null !== $this->sampleName) {
            $res['SampleName'] = $this->sampleName;
        }

        if (null !== $this->tab) {
            $res['Tab'] = $this->tab;
        }

        if (null !== $this->warningMessage) {
            $res['WarningMessage'] = $this->warningMessage;
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
        if (isset($map['HasWarnings'])) {
            $model->hasWarnings = $map['HasWarnings'];
        }

        if (isset($map['SampleId'])) {
            $model->sampleId = $map['SampleId'];
        }

        if (isset($map['SampleName'])) {
            $model->sampleName = $map['SampleName'];
        }

        if (isset($map['Tab'])) {
            $model->tab = $map['Tab'];
        }

        if (isset($map['WarningMessage'])) {
            $model->warningMessage = $map['WarningMessage'];
        }

        return $model;
    }
}
