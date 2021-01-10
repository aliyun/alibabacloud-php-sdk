<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class UpdateOsBlackWhiteVersionsRequest extends Model
{
    /**
     * @var string
     */
    public $whiteVersions;

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
    public $blackVersions;
    protected $_name = [
        'whiteVersions' => 'WhiteVersions',
        'projectId'     => 'ProjectId',
        'versionId'     => 'VersionId',
        'blackVersions' => 'BlackVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteVersions) {
            $res['WhiteVersions'] = $this->whiteVersions;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->blackVersions) {
            $res['BlackVersions'] = $this->blackVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOsBlackWhiteVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteVersions'])) {
            $model->whiteVersions = $map['WhiteVersions'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['BlackVersions'])) {
            $model->blackVersions = $map['BlackVersions'];
        }

        return $model;
    }
}
