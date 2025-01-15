<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

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
     * @example true
     *
     * @var bool
     */
    public $pullSamples;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $tableNames;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'keepTableNames'       => 'keepTableNames',
        'noModifiedTableNames' => 'noModifiedTableNames',
        'pullSamples'          => 'pullSamples',
        'tableNames'           => 'tableNames',
        'workspaceId'          => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keepTableNames) {
            $res['keepTableNames'] = $this->keepTableNames;
        }
        if (null !== $this->noModifiedTableNames) {
            $res['noModifiedTableNames'] = $this->noModifiedTableNames;
        }
        if (null !== $this->pullSamples) {
            $res['pullSamples'] = $this->pullSamples;
        }
        if (null !== $this->tableNames) {
            $res['tableNames'] = $this->tableNames;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncRemoteTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keepTableNames'])) {
            if (!empty($map['keepTableNames'])) {
                $model->keepTableNames = $map['keepTableNames'];
            }
        }
        if (isset($map['noModifiedTableNames'])) {
            if (!empty($map['noModifiedTableNames'])) {
                $model->noModifiedTableNames = $map['noModifiedTableNames'];
            }
        }
        if (isset($map['pullSamples'])) {
            $model->pullSamples = $map['pullSamples'];
        }
        if (isset($map['tableNames'])) {
            if (!empty($map['tableNames'])) {
                $model->tableNames = $map['tableNames'];
            }
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
