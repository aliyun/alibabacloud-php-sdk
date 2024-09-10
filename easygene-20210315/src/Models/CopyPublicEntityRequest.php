<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class CopyPublicEntityRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example TestDataset
     *
     * @var string
     */
    public $dataset;

    /**
     * @description This parameter is required.
     *
     * @example sample
     *
     * @var string
     */
    public $entityType;

    /**
     * @description This parameter is required.
     *
     * @example test-workspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'dataset'    => 'Dataset',
        'entityType' => 'EntityType',
        'workspace'  => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataset) {
            $res['Dataset'] = $this->dataset;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyPublicEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dataset'])) {
            $model->dataset = $map['Dataset'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
