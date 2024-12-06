<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class UpdateVirtualDatasourceInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example vdb-E0F693C8-9F72-5830-B81A-696C9D8EBBD1
     *
     * @var string
     */
    public $vdbId;

    /**
     * @example llm-2v3934xtp49esw64
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'description' => 'description',
        'name'        => 'name',
        'vdbId'       => 'vdbId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->vdbId) {
            $res['vdbId'] = $this->vdbId;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVirtualDatasourceInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['vdbId'])) {
            $model->vdbId = $map['vdbId'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
