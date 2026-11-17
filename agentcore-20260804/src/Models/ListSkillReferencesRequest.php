<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class ListSkillReferencesRequest extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $refType;

    /**
     * @var string
     */
    public $selectorType;

    /**
     * @var string
     */
    public $selectorValue;

    /**
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'pageNo' => 'pageNo',
        'pageSize' => 'pageSize',
        'refType' => 'refType',
        'selectorType' => 'selectorType',
        'selectorValue' => 'selectorValue',
        'sourceId' => 'sourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['pageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->refType) {
            $res['refType'] = $this->refType;
        }

        if (null !== $this->selectorType) {
            $res['selectorType'] = $this->selectorType;
        }

        if (null !== $this->selectorValue) {
            $res['selectorValue'] = $this->selectorValue;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
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
        if (isset($map['pageNo'])) {
            $model->pageNo = $map['pageNo'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['refType'])) {
            $model->refType = $map['refType'];
        }

        if (isset($map['selectorType'])) {
            $model->selectorType = $map['selectorType'];
        }

        if (isset($map['selectorValue'])) {
            $model->selectorValue = $map['selectorValue'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        return $model;
    }
}
