<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponseBody\versionIds;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponseBody\versionIds\versionId\versionStages;
use AlibabaCloud\Tea\Model;

class versionId extends Model
{
    /**
     * @description The time when the secret version was created.
     *
     * @example 2020-02-21T15:39:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The version number.
     *
     * @example 00000000000000000000000000000000203
     *
     * @var string
     */
    public $versionId;

    /**
     * @description The stage labels that mark the secret version.
     *
     * @var versionStages
     */
    public $versionStages;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'versionId'     => 'VersionId',
        'versionStages' => 'VersionStages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->versionStages) {
            $res['VersionStages'] = null !== $this->versionStages ? $this->versionStages->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionStages'])) {
            $model->versionStages = versionStages::fromMap($map['VersionStages']);
        }

        return $model;
    }
}
