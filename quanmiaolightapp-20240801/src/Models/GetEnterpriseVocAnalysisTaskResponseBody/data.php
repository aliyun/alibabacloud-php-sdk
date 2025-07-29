<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\usage;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @example qwen-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var statisticsOverview
     */
    public $statisticsOverview;

    /**
     * @example PENDING
     *
     * @var string
     */
    public $status;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'modelId' => 'modelId',
        'modelName' => 'modelName',
        'statisticsOverview' => 'statisticsOverview',
        'status' => 'status',
        'usage' => 'usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }
        if (null !== $this->statisticsOverview) {
            $res['statisticsOverview'] = null !== $this->statisticsOverview ? $this->statisticsOverview->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toMap() : null;
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
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }
        if (isset($map['statisticsOverview'])) {
            $model->statisticsOverview = statisticsOverview::fromMap($map['statisticsOverview']);
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
