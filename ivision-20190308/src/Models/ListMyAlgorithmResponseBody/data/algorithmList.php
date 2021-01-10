<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models\ListMyAlgorithmResponseBody\data;

use AlibabaCloud\Tea\Model;

class algorithmList extends Model
{
    /**
     * @var string
     */
    public $algorithmName;

    /**
     * @var string
     */
    public $deployRegion;

    /**
     * @var int
     */
    public $currentMonthCount;

    /**
     * @var string
     */
    public $algorithmCode;

    /**
     * @var string
     */
    public $apiDocUrl;

    /**
     * @var int
     */
    public $yesterdayCount;

    /**
     * @var int
     */
    public $algorithmOrder;
    protected $_name = [
        'algorithmName'     => 'AlgorithmName',
        'deployRegion'      => 'DeployRegion',
        'currentMonthCount' => 'CurrentMonthCount',
        'algorithmCode'     => 'AlgorithmCode',
        'apiDocUrl'         => 'ApiDocUrl',
        'yesterdayCount'    => 'YesterdayCount',
        'algorithmOrder'    => 'AlgorithmOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->deployRegion) {
            $res['DeployRegion'] = $this->deployRegion;
        }
        if (null !== $this->currentMonthCount) {
            $res['CurrentMonthCount'] = $this->currentMonthCount;
        }
        if (null !== $this->algorithmCode) {
            $res['AlgorithmCode'] = $this->algorithmCode;
        }
        if (null !== $this->apiDocUrl) {
            $res['ApiDocUrl'] = $this->apiDocUrl;
        }
        if (null !== $this->yesterdayCount) {
            $res['YesterdayCount'] = $this->yesterdayCount;
        }
        if (null !== $this->algorithmOrder) {
            $res['AlgorithmOrder'] = $this->algorithmOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return algorithmList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['DeployRegion'])) {
            $model->deployRegion = $map['DeployRegion'];
        }
        if (isset($map['CurrentMonthCount'])) {
            $model->currentMonthCount = $map['CurrentMonthCount'];
        }
        if (isset($map['AlgorithmCode'])) {
            $model->algorithmCode = $map['AlgorithmCode'];
        }
        if (isset($map['ApiDocUrl'])) {
            $model->apiDocUrl = $map['ApiDocUrl'];
        }
        if (isset($map['YesterdayCount'])) {
            $model->yesterdayCount = $map['YesterdayCount'];
        }
        if (isset($map['AlgorithmOrder'])) {
            $model->algorithmOrder = $map['AlgorithmOrder'];
        }

        return $model;
    }
}
