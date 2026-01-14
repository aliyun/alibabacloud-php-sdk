<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class ChunkItem extends Model
{
    /**
     * @var string
     */
    public $chunkContent;

    /**
     * @var string
     */
    public $chunkId;

    /**
     * @var string[]
     */
    public $docElsIds;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $docUrl;

    /**
     * @var float
     */
    public $rerankScore;

    /**
     * @var float
     */
    public $score;

    /**
     * @var float
     */
    public $weightedScore;
    protected $_name = [
        'chunkContent' => 'chunkContent',
        'chunkId' => 'chunkId',
        'docElsIds' => 'docElsIds',
        'docId' => 'docId',
        'docName' => 'docName',
        'docUrl' => 'docUrl',
        'rerankScore' => 'rerankScore',
        'score' => 'score',
        'weightedScore' => 'weightedScore',
    ];

    public function validate()
    {
        if (\is_array($this->docElsIds)) {
            Model::validateArray($this->docElsIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkContent) {
            $res['chunkContent'] = $this->chunkContent;
        }

        if (null !== $this->chunkId) {
            $res['chunkId'] = $this->chunkId;
        }

        if (null !== $this->docElsIds) {
            if (\is_array($this->docElsIds)) {
                $res['docElsIds'] = [];
                $n1 = 0;
                foreach ($this->docElsIds as $item1) {
                    $res['docElsIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }

        if (null !== $this->docName) {
            $res['docName'] = $this->docName;
        }

        if (null !== $this->docUrl) {
            $res['docUrl'] = $this->docUrl;
        }

        if (null !== $this->rerankScore) {
            $res['rerankScore'] = $this->rerankScore;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->weightedScore) {
            $res['weightedScore'] = $this->weightedScore;
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
        if (isset($map['chunkContent'])) {
            $model->chunkContent = $map['chunkContent'];
        }

        if (isset($map['chunkId'])) {
            $model->chunkId = $map['chunkId'];
        }

        if (isset($map['docElsIds'])) {
            if (!empty($map['docElsIds'])) {
                $model->docElsIds = [];
                $n1 = 0;
                foreach ($map['docElsIds'] as $item1) {
                    $model->docElsIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }

        if (isset($map['docName'])) {
            $model->docName = $map['docName'];
        }

        if (isset($map['docUrl'])) {
            $model->docUrl = $map['docUrl'];
        }

        if (isset($map['rerankScore'])) {
            $model->rerankScore = $map['rerankScore'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['weightedScore'])) {
            $model->weightedScore = $map['weightedScore'];
        }

        return $model;
    }
}
