<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class DqlResult extends Model
{
    /**
     * @var int
     */
    public $statementIndex;

    /**
     * @var SubmitPreviewResult
     */
    public $submitPreviewResult;

    /**
     * @var TableResult[]
     */
    public $tableResults;
    protected $_name = [
        'statementIndex' => 'statementIndex',
        'submitPreviewResult' => 'submitPreviewResult',
        'tableResults' => 'tableResults',
    ];

    public function validate()
    {
        if (null !== $this->submitPreviewResult) {
            $this->submitPreviewResult->validate();
        }
        if (\is_array($this->tableResults)) {
            Model::validateArray($this->tableResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statementIndex) {
            $res['statementIndex'] = $this->statementIndex;
        }

        if (null !== $this->submitPreviewResult) {
            $res['submitPreviewResult'] = null !== $this->submitPreviewResult ? $this->submitPreviewResult->toArray($noStream) : $this->submitPreviewResult;
        }

        if (null !== $this->tableResults) {
            if (\is_array($this->tableResults)) {
                $res['tableResults'] = [];
                $n1 = 0;
                foreach ($this->tableResults as $item1) {
                    $res['tableResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['statementIndex'])) {
            $model->statementIndex = $map['statementIndex'];
        }

        if (isset($map['submitPreviewResult'])) {
            $model->submitPreviewResult = SubmitPreviewResult::fromMap($map['submitPreviewResult']);
        }

        if (isset($map['tableResults'])) {
            if (!empty($map['tableResults'])) {
                $model->tableResults = [];
                $n1 = 0;
                foreach ($map['tableResults'] as $item1) {
                    $model->tableResults[$n1] = TableResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
