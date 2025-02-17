<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class UpdateEnumMappingRequest extends Model
{
    /**
     * @var string
     */
    public $columnIdKey;
    /**
     * @var string[][]
     */
    public $enumMapping;
    /**
     * @var string
     */
    public $tableIdKey;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'columnIdKey' => 'columnIdKey',
        'enumMapping' => 'enumMapping',
        'tableIdKey'  => 'tableIdKey',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->enumMapping)) {
            Model::validateArray($this->enumMapping);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnIdKey) {
            $res['columnIdKey'] = $this->columnIdKey;
        }

        if (null !== $this->enumMapping) {
            if (\is_array($this->enumMapping)) {
                $res['enumMapping'] = [];
                foreach ($this->enumMapping as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['enumMapping'][$key1] = [];
                        $n2                        = 0;
                        foreach ($value1 as $item2) {
                            $res['enumMapping'][$key1][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->tableIdKey) {
            $res['tableIdKey'] = $this->tableIdKey;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['columnIdKey'])) {
            $model->columnIdKey = $map['columnIdKey'];
        }

        if (isset($map['enumMapping'])) {
            if (!empty($map['enumMapping'])) {
                $model->enumMapping = [];
                foreach ($map['enumMapping'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->enumMapping[$key1] = [];
                        $n2                        = 0;
                        foreach ($value1 as $item2) {
                            $model->enumMapping[$key1][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (isset($map['tableIdKey'])) {
            $model->tableIdKey = $map['tableIdKey'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
