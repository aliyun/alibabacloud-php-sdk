<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateEntityRequest\entityItems;
use AlibabaCloud\Tea\Model;

class UpdateEntityRequest extends Model
{
    /**
     * @var entityItems[]
     */
    public $entityItems;

    /**
     * @example sample
     *
     * @var string
     */
    public $entityType;

    /**
     * @example test-workspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'entityItems' => 'EntityItems',
        'entityType'  => 'EntityType',
        'workspace'   => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityItems) {
            $res['EntityItems'] = [];
            if (null !== $this->entityItems && \is_array($this->entityItems)) {
                $n = 0;
                foreach ($this->entityItems as $item) {
                    $res['EntityItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return UpdateEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityItems'])) {
            if (!empty($map['EntityItems'])) {
                $model->entityItems = [];
                $n                  = 0;
                foreach ($map['EntityItems'] as $item) {
                    $model->entityItems[$n++] = null !== $item ? entityItems::fromMap($item) : $item;
                }
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
