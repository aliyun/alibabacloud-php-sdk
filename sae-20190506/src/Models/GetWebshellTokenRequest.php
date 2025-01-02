<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class GetWebshellTokenRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 017f39b8-dfa4-4e16-a84b-1dcee4b1****
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @description This parameter is required.
     *
     * @example hello-podsdfsdfsdfsdf
     *
     * @var string
     */
    public $podName;
    protected $_name = [
        'appId'         => 'AppId',
        'containerName' => 'ContainerName',
        'podName'       => 'PodName',
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
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebshellTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        return $model;
    }
}
