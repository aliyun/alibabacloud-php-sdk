<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomSourceTopicAnalysisRequest\news;

class SubmitCustomSourceTopicAnalysisRequest extends Model
{
    /**
     * @var string[]
     */
    public $analysisTypes;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var int
     */
    public $maxTopicSize;

    /**
     * @var news[]
     */
    public $news;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'analysisTypes' => 'AnalysisTypes',
        'fileType' => 'FileType',
        'fileUrl' => 'FileUrl',
        'maxTopicSize' => 'MaxTopicSize',
        'news' => 'News',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->analysisTypes)) {
            Model::validateArray($this->analysisTypes);
        }
        if (\is_array($this->news)) {
            Model::validateArray($this->news);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisTypes) {
            if (\is_array($this->analysisTypes)) {
                $res['AnalysisTypes'] = [];
                $n1 = 0;
                foreach ($this->analysisTypes as $item1) {
                    $res['AnalysisTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->maxTopicSize) {
            $res['MaxTopicSize'] = $this->maxTopicSize;
        }

        if (null !== $this->news) {
            if (\is_array($this->news)) {
                $res['News'] = [];
                $n1 = 0;
                foreach ($this->news as $item1) {
                    $res['News'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AnalysisTypes'])) {
            if (!empty($map['AnalysisTypes'])) {
                $model->analysisTypes = [];
                $n1 = 0;
                foreach ($map['AnalysisTypes'] as $item1) {
                    $model->analysisTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['MaxTopicSize'])) {
            $model->maxTopicSize = $map['MaxTopicSize'];
        }

        if (isset($map['News'])) {
            if (!empty($map['News'])) {
                $model->news = [];
                $n1 = 0;
                foreach ($map['News'] as $item1) {
                    $model->news[$n1] = news::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
