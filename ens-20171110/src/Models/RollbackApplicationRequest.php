<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RollbackApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $fromAppVersion;

    /**
     * @var string
     */
    public $toAppVersion;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId'          => 'AppId',
        'fromAppVersion' => 'FromAppVersion',
        'toAppVersion'   => 'ToAppVersion',
        'timeout'        => 'Timeout',
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
        if (null !== $this->fromAppVersion) {
            $res['FromAppVersion'] = $this->fromAppVersion;
        }
        if (null !== $this->toAppVersion) {
            $res['ToAppVersion'] = $this->toAppVersion;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RollbackApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['FromAppVersion'])) {
            $model->fromAppVersion = $map['FromAppVersion'];
        }
        if (isset($map['ToAppVersion'])) {
            $model->toAppVersion = $map['ToAppVersion'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
