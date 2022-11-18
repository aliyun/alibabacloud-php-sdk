<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class DownloadEntityRequest extends Model
{
    /**
     * @var string[]
     */
    public $entityNames;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'entityNames' => 'EntityNames',
        'entityType'  => 'EntityType',
        'workspace'   => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityNames) {
            $res['EntityNames'] = $this->entityNames;
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
     * @return DownloadEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityNames'])) {
            if (!empty($map['EntityNames'])) {
                $model->entityNames = $map['EntityNames'];
            }
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
