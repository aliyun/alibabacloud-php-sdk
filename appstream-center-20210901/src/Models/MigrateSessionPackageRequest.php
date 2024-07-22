<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class MigrateSessionPackageRequest extends Model
{
    /**
     * @example p-xxxxxx123x4312367
     *
     * @var string
     */
    public $destProjectId;

    /**
     * @description This parameter is required.
     *
     * @example tp-xxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $sessionPackageId;

    /**
     * @example p-xxxxxx123x4312345
     *
     * @var string
     */
    public $sourceProjectId;
    protected $_name = [
        'destProjectId'    => 'DestProjectId',
        'sessionPackageId' => 'SessionPackageId',
        'sourceProjectId'  => 'SourceProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destProjectId) {
            $res['DestProjectId'] = $this->destProjectId;
        }
        if (null !== $this->sessionPackageId) {
            $res['SessionPackageId'] = $this->sessionPackageId;
        }
        if (null !== $this->sourceProjectId) {
            $res['SourceProjectId'] = $this->sourceProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateSessionPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestProjectId'])) {
            $model->destProjectId = $map['DestProjectId'];
        }
        if (isset($map['SessionPackageId'])) {
            $model->sessionPackageId = $map['SessionPackageId'];
        }
        if (isset($map['SourceProjectId'])) {
            $model->sourceProjectId = $map['SourceProjectId'];
        }

        return $model;
    }
}
