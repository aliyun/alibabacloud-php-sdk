<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models\GetAlgorithmDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
    public $currentMonthSuccessCount;
    protected $_name = [
        'algorithmName'            => 'AlgorithmName',
        'deployRegion'             => 'DeployRegion',
        'currentMonthCount'        => 'CurrentMonthCount',
        'algorithmCode'            => 'AlgorithmCode',
        'apiDocUrl'                => 'ApiDocUrl',
        'currentMonthSuccessCount' => 'CurrentMonthSuccessCount',
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
        if (null !== $this->currentMonthSuccessCount) {
            $res['CurrentMonthSuccessCount'] = $this->currentMonthSuccessCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['CurrentMonthSuccessCount'])) {
            $model->currentMonthSuccessCount = $map['CurrentMonthSuccessCount'];
        }

        return $model;
    }
}
