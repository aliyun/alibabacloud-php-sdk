<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class SyncRemoteTablesRequest extends Model
{
    /**
     * @var string[]
     */
    public $keepTableNames;

    /**
     * @var string[]
     */
    public $noModifiedTableNames;

    /**
     * @var bool
     */
    public $pullSamples;

    /**
     * @var string[]
     */
    public $tableNames;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'keepTableNames' => 'keepTableNames',
        'noModifiedTableNames' => 'noModifiedTableNames',
        'pullSamples' => 'pullSamples',
        'tableNames' => 'tableNames',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->keepTableNames)) {
            Model::validateArray($this->keepTableNames);
        }
        if (\is_array($this->noModifiedTableNames)) {
            Model::validateArray($this->noModifiedTableNames);
        }
        if (\is_array($this->tableNames)) {
            Model::validateArray($this->tableNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keepTableNames) {
            if (\is_array($this->keepTableNames)) {
                $res['keepTableNames'] = [];
                $n1 = 0;
                foreach ($this->keepTableNames as $item1) {
                    $res['keepTableNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->noModifiedTableNames) {
            if (\is_array($this->noModifiedTableNames)) {
                $res['noModifiedTableNames'] = [];
                $n1 = 0;
                foreach ($this->noModifiedTableNames as $item1) {
                    $res['noModifiedTableNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pullSamples) {
            $res['pullSamples'] = $this->pullSamples;
        }

        if (null !== $this->tableNames) {
            if (\is_array($this->tableNames)) {
                $res['tableNames'] = [];
                $n1 = 0;
                foreach ($this->tableNames as $item1) {
                    $res['tableNames'][$n1++] = $item1;
                }
            }
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
        if (isset($map['keepTableNames'])) {
            if (!empty($map['keepTableNames'])) {
                $model->keepTableNames = [];
                $n1 = 0;
                foreach ($map['keepTableNames'] as $item1) {
                    $model->keepTableNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['noModifiedTableNames'])) {
            if (!empty($map['noModifiedTableNames'])) {
                $model->noModifiedTableNames = [];
                $n1 = 0;
                foreach ($map['noModifiedTableNames'] as $item1) {
                    $model->noModifiedTableNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['pullSamples'])) {
            $model->pullSamples = $map['pullSamples'];
        }

        if (isset($map['tableNames'])) {
            if (!empty($map['tableNames'])) {
                $model->tableNames = [];
                $n1 = 0;
                foreach ($map['tableNames'] as $item1) {
                    $model->tableNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
