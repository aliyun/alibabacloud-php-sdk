<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class ModifyCustomDomainSampleRateRequest extends Model
{
    /**
     * @var string
     */
    public $baseConfigID;

    /**
     * @var string
     */
    public $domainNames;

    /**
     * @var float
     */
    public $sampleRate;

    /**
     * @var int
     */
    public $sinkID;
    protected $_name = [
        'baseConfigID' => 'BaseConfigID',
        'domainNames' => 'DomainNames',
        'sampleRate' => 'SampleRate',
        'sinkID' => 'SinkID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseConfigID) {
            $res['BaseConfigID'] = $this->baseConfigID;
        }

        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }

        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }

        if (null !== $this->sinkID) {
            $res['SinkID'] = $this->sinkID;
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
        if (isset($map['BaseConfigID'])) {
            $model->baseConfigID = $map['BaseConfigID'];
        }

        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }

        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        if (isset($map['SinkID'])) {
            $model->sinkID = $map['SinkID'];
        }

        return $model;
    }
}
