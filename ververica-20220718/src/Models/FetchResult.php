<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class FetchResult extends Model
{
    /**
     * @var string
     */
    public $resultMessage;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var TableResult[]
     */
    public $tableResults;
    protected $_name = [
        'resultMessage' => 'resultMessage',
        'resultType' => 'resultType',
        'tableResults' => 'tableResults',
    ];

    public function validate()
    {
        if (\is_array($this->tableResults)) {
            Model::validateArray($this->tableResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resultMessage) {
            $res['resultMessage'] = $this->resultMessage;
        }

        if (null !== $this->resultType) {
            $res['resultType'] = $this->resultType;
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
        if (isset($map['resultMessage'])) {
            $model->resultMessage = $map['resultMessage'];
        }

        if (isset($map['resultType'])) {
            $model->resultType = $map['resultType'];
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
