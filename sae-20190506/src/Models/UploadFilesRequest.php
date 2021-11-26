<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UploadFilesRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $cloudUrl;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $localpath;
    protected $_name = [
        'appId'      => 'AppId',
        'cloudUrl'   => 'CloudUrl',
        'instanceId' => 'InstanceId',
        'localpath'  => 'Localpath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cloudUrl) {
            $res['CloudUrl'] = $this->cloudUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->localpath) {
            $res['Localpath'] = $this->localpath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CloudUrl'])) {
            $model->cloudUrl = $map['CloudUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Localpath'])) {
            $model->localpath = $map['Localpath'];
        }

        return $model;
    }
}
