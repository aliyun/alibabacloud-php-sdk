<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RollbackApplicationRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     * @example 474bdef0-d149-4695-abfb-52912d9143f0
     *
     * @var string
     */
    public $appId;

    /**
     * @description The current version number.
     *
     * This parameter is required.
     * @example v2-1
     *
     * @var string
     */
    public $fromAppVersion;

    /**
     * @description The timeout period of the asynchronous rollback operation. Unit: seconds. Default value: 300.
     *
     * @example 1800
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The target version number. By default, the system automatically rolls back the container version to the previous version.
     *
     * @example v2
     *
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
