<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\Tea\Model;

class DescribeCaptchaRiskRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $refExtId;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'configName' => 'ConfigName',
        'time'       => 'Time',
        'refExtId'   => 'RefExtId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->refExtId) {
            $res['RefExtId'] = $this->refExtId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCaptchaRiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['RefExtId'])) {
            $model->refExtId = $map['RefExtId'];
        }

        return $model;
    }
}
