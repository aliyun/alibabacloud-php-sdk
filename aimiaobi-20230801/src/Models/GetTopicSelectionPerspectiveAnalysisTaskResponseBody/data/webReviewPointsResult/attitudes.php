<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\webReviewPointsResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\webReviewPointsResult\attitudes\comments;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\webReviewPointsResult\attitudes\viewPoints;
use AlibabaCloud\Tea\Model;

class attitudes extends Model
{
    /**
     * @example 当前观点
     *
     * @var string
     */
    public $attitude;

    /**
     * @example 观点类型
     *
     * @var string
     */
    public $attitudeType;

    /**
     * @var comments[]
     */
    public $comments;

    /**
     * @example 当前观点占比
     *
     * @var string
     */
    public $ratio;

    /**
     * @var viewPoints[]
     */
    public $viewPoints;
    protected $_name = [
        'attitude' => 'Attitude',
        'attitudeType' => 'AttitudeType',
        'comments' => 'Comments',
        'ratio' => 'Ratio',
        'viewPoints' => 'ViewPoints',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attitude) {
            $res['Attitude'] = $this->attitude;
        }
        if (null !== $this->attitudeType) {
            $res['AttitudeType'] = $this->attitudeType;
        }
        if (null !== $this->comments) {
            $res['Comments'] = [];
            if (null !== $this->comments && \is_array($this->comments)) {
                $n = 0;
                foreach ($this->comments as $item) {
                    $res['Comments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->viewPoints) {
            $res['ViewPoints'] = [];
            if (null !== $this->viewPoints && \is_array($this->viewPoints)) {
                $n = 0;
                foreach ($this->viewPoints as $item) {
                    $res['ViewPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attitudes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attitude'])) {
            $model->attitude = $map['Attitude'];
        }
        if (isset($map['AttitudeType'])) {
            $model->attitudeType = $map['AttitudeType'];
        }
        if (isset($map['Comments'])) {
            if (!empty($map['Comments'])) {
                $model->comments = [];
                $n = 0;
                foreach ($map['Comments'] as $item) {
                    $model->comments[$n++] = null !== $item ? comments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['ViewPoints'])) {
            if (!empty($map['ViewPoints'])) {
                $model->viewPoints = [];
                $n = 0;
                foreach ($map['ViewPoints'] as $item) {
                    $model->viewPoints[$n++] = null !== $item ? viewPoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
