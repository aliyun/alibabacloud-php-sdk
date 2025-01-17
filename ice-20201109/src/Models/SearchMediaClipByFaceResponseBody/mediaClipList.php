<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList\occurrencesInfos;

class mediaClipList extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var string
     */
    public $labelName;
    /**
     * @var occurrencesInfos[]
     */
    public $occurrencesInfos;
    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'category'         => 'Category',
        'entityId'         => 'EntityId',
        'labelName'        => 'LabelName',
        'occurrencesInfos' => 'OccurrencesInfos',
        'score'            => 'Score',
    ];

    public function validate()
    {
        if (\is_array($this->occurrencesInfos)) {
            Model::validateArray($this->occurrencesInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }

        if (null !== $this->occurrencesInfos) {
            if (\is_array($this->occurrencesInfos)) {
                $res['OccurrencesInfos'] = [];
                $n1                      = 0;
                foreach ($this->occurrencesInfos as $item1) {
                    $res['OccurrencesInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }

        if (isset($map['OccurrencesInfos'])) {
            if (!empty($map['OccurrencesInfos'])) {
                $model->occurrencesInfos = [];
                $n1                      = 0;
                foreach ($map['OccurrencesInfos'] as $item1) {
                    $model->occurrencesInfos[$n1++] = occurrencesInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
