<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GetVersionRequest extends Model
{
    /**
     * @description The ID of the workflow.
     *
     * @example lc-uf6axpwfcw4ubx
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The ID of the version.
     *
     * @example 10
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'flowId'    => 'FlowId',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
