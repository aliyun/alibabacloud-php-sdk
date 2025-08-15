<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetResponseBody\data\newsArticleResults;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $datasetDescription;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $datasetType;

    /**
     * @var newsArticleResults[]
     */
    public $newsArticleResults;

    /**
     * @var int
     */
    public $searchDatasetEnable;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'datasetDescription' => 'DatasetDescription',
        'datasetId' => 'DatasetId',
        'datasetName' => 'DatasetName',
        'datasetType' => 'DatasetType',
        'newsArticleResults' => 'NewsArticleResults',
        'searchDatasetEnable' => 'SearchDatasetEnable',
    ];

    public function validate()
    {
        if (\is_array($this->newsArticleResults)) {
            Model::validateArray($this->newsArticleResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->datasetDescription) {
            $res['DatasetDescription'] = $this->datasetDescription;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }

        if (null !== $this->newsArticleResults) {
            if (\is_array($this->newsArticleResults)) {
                $res['NewsArticleResults'] = [];
                $n1 = 0;
                foreach ($this->newsArticleResults as $item1) {
                    $res['NewsArticleResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchDatasetEnable) {
            $res['SearchDatasetEnable'] = $this->searchDatasetEnable;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['DatasetDescription'])) {
            $model->datasetDescription = $map['DatasetDescription'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }

        if (isset($map['NewsArticleResults'])) {
            if (!empty($map['NewsArticleResults'])) {
                $model->newsArticleResults = [];
                $n1 = 0;
                foreach ($map['NewsArticleResults'] as $item1) {
                    $model->newsArticleResults[$n1] = newsArticleResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SearchDatasetEnable'])) {
            $model->searchDatasetEnable = $map['SearchDatasetEnable'];
        }

        return $model;
    }
}
