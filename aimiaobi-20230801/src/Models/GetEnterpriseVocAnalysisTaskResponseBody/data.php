<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\usage;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;
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
        'errorMessage'       => 'ErrorMessage',
        'statisticsOverview' => 'StatisticsOverview',
        'status'             => 'Status',
        'usage'              => 'Usage',
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
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->statisticsOverview) {
            $res['StatisticsOverview'] = null !== $this->statisticsOverview ? $this->statisticsOverview->toArray($noStream) : $this->statisticsOverview;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['StatisticsOverview'])) {
            $model->statisticsOverview = statisticsOverview::fromMap($map['StatisticsOverview']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }

        return $model;
    }
}
