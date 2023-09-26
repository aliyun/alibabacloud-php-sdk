<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiResponseBody\deployedInfos;

use AlibabaCloud\Tea\Model;

class deployedInfo extends Model
{
    /**
     * @var string
     */
    public $deployedStatus;

    /**
     * @var string
     */
    public $effectiveVersion;

    /**
     * @var string
     */
    public $stageName;
    protected $_name = [
        'deployedStatus'   => 'DeployedStatus',
        'effectiveVersion' => 'EffectiveVersion',
        'stageName'        => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployedStatus) {
            $res['DeployedStatus'] = $this->deployedStatus;
        }
        if (null !== $this->effectiveVersion) {
            $res['EffectiveVersion'] = $this->effectiveVersion;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployedInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployedStatus'])) {
            $model->deployedStatus = $map['DeployedStatus'];
        }
        if (isset($map['EffectiveVersion'])) {
            $model->effectiveVersion = $map['EffectiveVersion'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
