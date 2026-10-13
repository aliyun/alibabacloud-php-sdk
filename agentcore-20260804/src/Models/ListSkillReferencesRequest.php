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
    public $selectorType;

    /**
     * @var string
     */
    public $selectorValue;
    protected $_name = [
        'pageNo' => 'pageNo',
        'pageSize' => 'pageSize',
        'selectorType' => 'selectorType',
        'selectorValue' => 'selectorValue',
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

        if (null !== $this->selectorType) {
            $res['selectorType'] = $this->selectorType;
        }

        if (null !== $this->selectorValue) {
            $res['selectorValue'] = $this->selectorValue;
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

        if (isset($map['selectorType'])) {
            $model->selectorType = $map['selectorType'];
        }

        if (isset($map['selectorValue'])) {
            $model->selectorValue = $map['selectorValue'];
        }

        return $model;
    }
}
