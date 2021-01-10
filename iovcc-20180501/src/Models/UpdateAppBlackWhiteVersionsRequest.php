<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppBlackWhiteVersionsRequest extends Model
{
    /**
     * @var string
     */
    public $whiteAppVersions;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $blackAppVersions;
    protected $_name = [
        'whiteAppVersions' => 'WhiteAppVersions',
        'projectId'        => 'ProjectId',
        'versionId'        => 'VersionId',
        'blackAppVersions' => 'BlackAppVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteAppVersions) {
            $res['WhiteAppVersions'] = $this->whiteAppVersions;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->blackAppVersions) {
            $res['BlackAppVersions'] = $this->blackAppVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppBlackWhiteVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteAppVersions'])) {
            $model->whiteAppVersions = $map['WhiteAppVersions'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['BlackAppVersions'])) {
            $model->blackAppVersions = $map['BlackAppVersions'];
        }

        return $model;
    }
}
