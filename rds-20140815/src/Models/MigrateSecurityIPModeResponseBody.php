<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class MigrateSecurityIPModeResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the request.
     *
     * @example EF1E53AB-5625-49C7-ADF1-FBD0B6640D19
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The whitelist mode after the change, which is the enhanced whitelist mode.
     *
     * Valid values:
     *
     *   safety
     *
     * <!-- -->
     * @example safety
     *
     * @var string
     */
    public $securityIPMode;
    protected $_name = [
        'DBInstanceId'   => 'DBInstanceId',
        'requestId'      => 'RequestId',
        'securityIPMode' => 'SecurityIPMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityIPMode) {
            $res['SecurityIPMode'] = $this->securityIPMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateSecurityIPModeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityIPMode'])) {
            $model->securityIPMode = $map['SecurityIPMode'];
        }

        return $model;
    }
}
