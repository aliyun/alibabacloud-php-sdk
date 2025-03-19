<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class UpgradeServiceInstanceResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 4DB0F536-B3BE-4F0D-BD29-E83FB56D550C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The parameters required for the upgrade. This parameter is returned only if DryRun is set to true in the request. You can specify the required parameters based on the returned value when you perform an actual request.
     *
     * @var string[]
     */
    public $upgradeRequiredParameters;
    protected $_name = [
        'requestId' => 'RequestId',
        'upgradeRequiredParameters' => 'UpgradeRequiredParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->upgradeRequiredParameters) {
            $res['UpgradeRequiredParameters'] = $this->upgradeRequiredParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeServiceInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpgradeRequiredParameters'])) {
            if (!empty($map['UpgradeRequiredParameters'])) {
                $model->upgradeRequiredParameters = $map['UpgradeRequiredParameters'];
            }
        }

        return $model;
    }
}
