<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponseBody\apiSummarys\apiSummary\deployedInfos;

use AlibabaCloud\Dara\Model;

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
        'deployedStatus' => 'DeployedStatus',
        'effectiveVersion' => 'EffectiveVersion',
        'stageName' => 'StageName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
