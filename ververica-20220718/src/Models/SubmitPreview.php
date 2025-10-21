<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SubmitPreview extends Model
{
    /**
     * @var string
     */
    public $queryName;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var TableSchema[]
     */
    public $tableSchemas;
    protected $_name = [
        'queryName' => 'queryName',
        'sessionId' => 'sessionId',
        'tableSchemas' => 'tableSchemas',
    ];

    public function validate()
    {
        if (\is_array($this->tableSchemas)) {
            Model::validateArray($this->tableSchemas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryName) {
            $res['queryName'] = $this->queryName;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->tableSchemas) {
            if (\is_array($this->tableSchemas)) {
                $res['tableSchemas'] = [];
                $n1 = 0;
                foreach ($this->tableSchemas as $item1) {
                    $res['tableSchemas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['queryName'])) {
            $model->queryName = $map['queryName'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['tableSchemas'])) {
            if (!empty($map['tableSchemas'])) {
                $model->tableSchemas = [];
                $n1 = 0;
                foreach ($map['tableSchemas'] as $item1) {
                    $model->tableSchemas[$n1] = TableSchema::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
