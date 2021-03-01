<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class StartK8sApplicationRequest extends Model
{
    /**
     * @var int
     */
    public $replicas;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'replicas' => 'Replicas',
        'timeout'  => 'Timeout',
        'appId'    => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartK8sApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
