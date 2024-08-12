<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class GetAppOtaLatestVersionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $baseVersion;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $clientUid;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'baseVersion' => 'BaseVersion',
        'clientType'  => 'ClientType',
        'clientUid'   => 'ClientUid',
        'osType'      => 'OsType',
        'project'     => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseVersion) {
            $res['BaseVersion'] = $this->baseVersion;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->clientUid) {
            $res['ClientUid'] = $this->clientUid;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppOtaLatestVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseVersion'])) {
            $model->baseVersion = $map['BaseVersion'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['ClientUid'])) {
            $model->clientUid = $map['ClientUid'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
