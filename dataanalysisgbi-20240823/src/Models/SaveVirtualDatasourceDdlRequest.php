<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class SaveVirtualDatasourceDdlRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ddl;

    /**
     * @description This parameter is required.
     *
     * @example vdb-E0F693C8-9F72-5830-B81A-696C9D8EBBD1
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
        'ddl'         => 'ddl',
        'vdbId'       => 'vdbId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddl) {
            $res['ddl'] = $this->ddl;
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
     * @return SaveVirtualDatasourceDdlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ddl'])) {
            $model->ddl = $map['ddl'];
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
