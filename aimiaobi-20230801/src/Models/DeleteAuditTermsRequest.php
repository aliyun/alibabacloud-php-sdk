<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class DeleteAuditTermsRequest extends Model
{
    /**
     * @var int[]
     */
    public $idList;

    /**
     * @description This parameter is required.
     *
     * @example llm-xx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'idList' => 'IdList',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->idList) {
            $res['IdList'] = $this->idList;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAuditTermsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdList'])) {
            if (!empty($map['IdList'])) {
                $model->idList = $map['IdList'];
            }
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
