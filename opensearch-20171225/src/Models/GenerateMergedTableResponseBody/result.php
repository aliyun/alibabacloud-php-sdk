<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GenerateMergedTableResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var mixed[]
     */
    public $fromTable;

    /**
     * @var mixed[]
     */
    public $mergeTable;

    /**
     * @var string
     */
    public $primaryKey;
    protected $_name = [
        'fromTable' => 'fromTable',
        'mergeTable' => 'mergeTable',
        'primaryKey' => 'primaryKey',
    ];

    public function validate()
    {
        if (\is_array($this->fromTable)) {
            Model::validateArray($this->fromTable);
        }
        if (\is_array($this->mergeTable)) {
            Model::validateArray($this->mergeTable);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromTable) {
            if (\is_array($this->fromTable)) {
                $res['fromTable'] = [];
                foreach ($this->fromTable as $key1 => $value1) {
                    $res['fromTable'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->mergeTable) {
            if (\is_array($this->mergeTable)) {
                $res['mergeTable'] = [];
                foreach ($this->mergeTable as $key1 => $value1) {
                    $res['mergeTable'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->primaryKey) {
            $res['primaryKey'] = $this->primaryKey;
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
        if (isset($map['fromTable'])) {
            if (!empty($map['fromTable'])) {
                $model->fromTable = [];
                foreach ($map['fromTable'] as $key1 => $value1) {
                    $model->fromTable[$key1] = $value1;
                }
            }
        }

        if (isset($map['mergeTable'])) {
            if (!empty($map['mergeTable'])) {
                $model->mergeTable = [];
                foreach ($map['mergeTable'] as $key1 => $value1) {
                    $model->mergeTable[$key1] = $value1;
                }
            }
        }

        if (isset($map['primaryKey'])) {
            $model->primaryKey = $map['primaryKey'];
        }

        return $model;
    }
}
