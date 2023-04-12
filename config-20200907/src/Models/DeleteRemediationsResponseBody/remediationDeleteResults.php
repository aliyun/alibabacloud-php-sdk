<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DeleteRemediationsResponseBody;

use AlibabaCloud\Tea\Model;

class remediationDeleteResults extends Model
{
    /**
     * @description The error code.
     *
     *   If the remediation setting is deleted, no error code is returned.
     *   If the remediation setting fails to be deleted, an error code is returned. For more information about error codes, visit the [API Error Center](https://error-center.alibabacloud.com/status/product/Config).
     *
     * @example RemediationConfigNotExist
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the remediation setting.
     *
     * @example crr-909ba2d4716700eb****
     *
     * @var string
     */
    public $remediationId;

    /**
     * @description Indicates whether the call is successful. Valid values:
     *
     *   true: The call is successful.
     *   false: The call fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorMessage'  => 'ErrorMessage',
        'remediationId' => 'RemediationId',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->remediationId) {
            $res['RemediationId'] = $this->remediationId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remediationDeleteResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RemediationId'])) {
            $model->remediationId = $map['RemediationId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
