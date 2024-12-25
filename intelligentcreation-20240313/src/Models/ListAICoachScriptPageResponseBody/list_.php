<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\completeStrategy;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\sampleDialogueList;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\weights;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var completeStrategy
     */
    public $completeStrategy;

    /**
     * @example https://oss-ata.alibaba.com/front/live/banner1.png
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @var string[]
     */
    public $expressiveness;

    /**
     * @example 2024-12-25 14:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-12-25 14:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example student
     *
     * @var string
     */
    public $initiator;

    /**
     * @example 4
     *
     * @var string
     */
    public $interactionType;

    /**
     * @var string
     */
    public $introduce;

    /**
     * @example prod-ydsf
     *
     * @var string
     */
    public $name;

    /**
     * @var sampleDialogueList[]
     */
    public $sampleDialogueList;

    /**
     * @example 1
     *
     * @var string
     */
    public $scriptRecordId;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var weights
     */
    public $weights;
    protected $_name = [
        'completeStrategy'   => 'completeStrategy',
        'coverUrl'           => 'coverUrl',
        'expressiveness'     => 'expressiveness',
        'gmtCreate'          => 'gmtCreate',
        'gmtModified'        => 'gmtModified',
        'initiator'          => 'initiator',
        'interactionType'    => 'interactionType',
        'introduce'          => 'introduce',
        'name'               => 'name',
        'sampleDialogueList' => 'sampleDialogueList',
        'scriptRecordId'     => 'scriptRecordId',
        'status'             => 'status',
        'weights'            => 'weights',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeStrategy) {
            $res['completeStrategy'] = null !== $this->completeStrategy ? $this->completeStrategy->toMap() : null;
        }
        if (null !== $this->coverUrl) {
            $res['coverUrl'] = $this->coverUrl;
        }
        if (null !== $this->expressiveness) {
            $res['expressiveness'] = $this->expressiveness;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->initiator) {
            $res['initiator'] = $this->initiator;
        }
        if (null !== $this->interactionType) {
            $res['interactionType'] = $this->interactionType;
        }
        if (null !== $this->introduce) {
            $res['introduce'] = $this->introduce;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sampleDialogueList) {
            $res['sampleDialogueList'] = [];
            if (null !== $this->sampleDialogueList && \is_array($this->sampleDialogueList)) {
                $n = 0;
                foreach ($this->sampleDialogueList as $item) {
                    $res['sampleDialogueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scriptRecordId) {
            $res['scriptRecordId'] = $this->scriptRecordId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->weights) {
            $res['weights'] = null !== $this->weights ? $this->weights->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['completeStrategy'])) {
            $model->completeStrategy = completeStrategy::fromMap($map['completeStrategy']);
        }
        if (isset($map['coverUrl'])) {
            $model->coverUrl = $map['coverUrl'];
        }
        if (isset($map['expressiveness'])) {
            $model->expressiveness = $map['expressiveness'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['initiator'])) {
            $model->initiator = $map['initiator'];
        }
        if (isset($map['interactionType'])) {
            $model->interactionType = $map['interactionType'];
        }
        if (isset($map['introduce'])) {
            $model->introduce = $map['introduce'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['sampleDialogueList'])) {
            if (!empty($map['sampleDialogueList'])) {
                $model->sampleDialogueList = [];
                $n                         = 0;
                foreach ($map['sampleDialogueList'] as $item) {
                    $model->sampleDialogueList[$n++] = null !== $item ? sampleDialogueList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['scriptRecordId'])) {
            $model->scriptRecordId = $map['scriptRecordId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['weights'])) {
            $model->weights = weights::fromMap($map['weights']);
        }

        return $model;
    }
}
