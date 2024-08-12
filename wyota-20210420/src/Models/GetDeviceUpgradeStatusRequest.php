<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceUpgradeStatusRequest extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $clientUid;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $taskUid;
    protected $_name = [
        'appVersion' => 'AppVersion',
        'clientUid'  => 'ClientUid',
        'project'    => 'Project',
        'taskUid'    => 'TaskUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->clientUid) {
            $res['ClientUid'] = $this->clientUid;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->taskUid) {
            $res['TaskUid'] = $this->taskUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceUpgradeStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['ClientUid'])) {
            $model->clientUid = $map['ClientUid'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['TaskUid'])) {
            $model->taskUid = $map['TaskUid'];
        }

        return $model;
    }
}
