<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribePodContainerLogListRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var int
     */
    public $line;

    /**
     * @var string
     */
    public $podName;
    protected $_name = [
        'appId'   => 'AppId',
        'envId'   => 'EnvId',
        'line'    => 'Line',
        'podName' => 'PodName',
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
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePodContainerLogListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        return $model;
    }
}
