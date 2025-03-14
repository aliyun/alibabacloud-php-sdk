<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class DeleteVirtualDatasourceInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example vdb-7D63529B-5D42-5BF0-84E4-F742FFE02E7F
     *
     * @var string
     */
    public $vdbId;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'vdbId' => 'vdbId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return DeleteVirtualDatasourceInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['vdbId'])) {
            $model->vdbId = $map['vdbId'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
