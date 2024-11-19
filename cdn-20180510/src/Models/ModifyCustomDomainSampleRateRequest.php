<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class ModifyCustomDomainSampleRateRequest extends Model
{
    /**
     * @var string
     */
    public $baseConfigID;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $domainName;

    /**
     * @description This parameter is required.
     *
     * @var float
     */
    public $sampleRate;

    /**
     * @var int
     */
    public $sinkID;
    protected $_name = [
        'baseConfigID' => 'BaseConfigID',
        'domainName'   => 'DomainName',
        'sampleRate'   => 'SampleRate',
        'sinkID'       => 'SinkID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseConfigID) {
            $res['BaseConfigID'] = $this->baseConfigID;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }
        if (null !== $this->sinkID) {
            $res['SinkID'] = $this->sinkID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCustomDomainSampleRateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseConfigID'])) {
            $model->baseConfigID = $map['BaseConfigID'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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
