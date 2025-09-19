<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackPathEventDetailResponseBody\attackPathEvent;

use AlibabaCloud\Dara\Model;

class pathEventEdgeList extends Model
{
    /**
     * @var int
     */
    public $edgeId;

    /**
     * @var string
     */
    public $edgeType;

    /**
     * @var string
     */
    public $elementType;

    /**
     * @var string
     */
    public $endNodeUuid;

    /**
     * @var string
     */
    public $repairSuggestionDisplay;

    /**
     * @var string
     */
    public $startNodeUuid;
    protected $_name = [
        'edgeId' => 'EdgeId',
        'edgeType' => 'EdgeType',
        'elementType' => 'ElementType',
        'endNodeUuid' => 'EndNodeUuid',
        'repairSuggestionDisplay' => 'RepairSuggestionDisplay',
        'startNodeUuid' => 'StartNodeUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeId) {
            $res['EdgeId'] = $this->edgeId;
        }

        if (null !== $this->edgeType) {
            $res['EdgeType'] = $this->edgeType;
        }

        if (null !== $this->elementType) {
            $res['ElementType'] = $this->elementType;
        }

        if (null !== $this->endNodeUuid) {
            $res['EndNodeUuid'] = $this->endNodeUuid;
        }

        if (null !== $this->repairSuggestionDisplay) {
            $res['RepairSuggestionDisplay'] = $this->repairSuggestionDisplay;
        }

        if (null !== $this->startNodeUuid) {
            $res['StartNodeUuid'] = $this->startNodeUuid;
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
        if (isset($map['EdgeId'])) {
            $model->edgeId = $map['EdgeId'];
        }

        if (isset($map['EdgeType'])) {
            $model->edgeType = $map['EdgeType'];
        }

        if (isset($map['ElementType'])) {
            $model->elementType = $map['ElementType'];
        }

        if (isset($map['EndNodeUuid'])) {
            $model->endNodeUuid = $map['EndNodeUuid'];
        }

        if (isset($map['RepairSuggestionDisplay'])) {
            $model->repairSuggestionDisplay = $map['RepairSuggestionDisplay'];
        }

        if (isset($map['StartNodeUuid'])) {
            $model->startNodeUuid = $map['StartNodeUuid'];
        }

        return $model;
    }
}
