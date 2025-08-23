<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\usage;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
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

    public function validate()
    {
        if (null !== $this->statisticsOverview) {
            $this->statisticsOverview->validate();
        }
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['statisticsOverview'] = null !== $this->statisticsOverview ? $this->statisticsOverview->toArray($noStream) : $this->statisticsOverview;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
