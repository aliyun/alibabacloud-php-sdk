<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerScanConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $allCount;

    /**
     * @var string
     */
    public $appNames;

    /**
     * @var int
     */
    public $chooseCount;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;
    protected $_name = [
        'allCount' => 'AllCount',
        'appNames' => 'AppNames',
        'chooseCount' => 'ChooseCount',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allCount) {
            $res['AllCount'] = $this->allCount;
        }

        if (null !== $this->appNames) {
            $res['AppNames'] = $this->appNames;
        }

        if (null !== $this->chooseCount) {
            $res['ChooseCount'] = $this->chooseCount;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
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
        if (isset($map['AllCount'])) {
            $model->allCount = $map['AllCount'];
        }

        if (isset($map['AppNames'])) {
            $model->appNames = $map['AppNames'];
        }

        if (isset($map['ChooseCount'])) {
            $model->chooseCount = $map['ChooseCount'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        return $model;
    }
}
