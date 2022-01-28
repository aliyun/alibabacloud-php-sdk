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
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $toAppVersion;
    protected $_name = [
        'appId'          => 'AppId',
        'fromAppVersion' => 'FromAppVersion',
        'timeout'        => 'Timeout',
        'toAppVersion'   => 'ToAppVersion',
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
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->toAppVersion) {
            $res['ToAppVersion'] = $this->toAppVersion;
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
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['ToAppVersion'])) {
            $model->toAppVersion = $map['ToAppVersion'];
        }

        return $model;
    }
}
