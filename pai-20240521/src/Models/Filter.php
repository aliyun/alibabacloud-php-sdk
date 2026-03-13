<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pai\V20240521\Models;

use AlibabaCloud\Dara\Model;

class Filter extends Model
{
    /**
     * @var string
     */
    public $filterBy;

    /**
     * @var string
     */
    public $filterCondition;

    /**
     * @var string
     */
    public $filterOperation;
    protected $_name = [
        'filterBy' => 'FilterBy',
        'filterCondition' => 'FilterCondition',
        'filterOperation' => 'FilterOperation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterBy) {
            $res['FilterBy'] = $this->filterBy;
        }

        if (null !== $this->filterCondition) {
            $res['FilterCondition'] = $this->filterCondition;
        }

        if (null !== $this->filterOperation) {
            $res['FilterOperation'] = $this->filterOperation;
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
        if (isset($map['FilterBy'])) {
            $model->filterBy = $map['FilterBy'];
        }

        if (isset($map['FilterCondition'])) {
            $model->filterCondition = $map['FilterCondition'];
        }

        if (isset($map['FilterOperation'])) {
            $model->filterOperation = $map['FilterOperation'];
        }

        return $model;
    }
}
