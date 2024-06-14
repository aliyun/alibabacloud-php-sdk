<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateRotationPolicyRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic key rotation. Valid values:
     *
     *   true: enables automatic key rotation.
     *   false: disables automatic key rotation.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $enableAutomaticRotation;

    /**
     * @description The ID of the customer master key (CMK). The ID must be globally unique.
     *
     * This parameter is required.
     * @example 1234abcd-12ab-34cd-56ef-12345678****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The period of automatic key rotation. Specify the value in the integer[unit] format. The following units are supported: d (day), h (hour), m (minute), and s (second). For example, you can use either 7d or 604800s to specify a seven-day period. The period can range from 7 days to 730 days.
     *
     * >  If you set the EnableAutomaticRotation parameter to true, you must also specify this parameter. If you set the EnableAutomaticRotation parameter to false, you can leave this parameter unspecified.
     * @example 30d
     *
     * @var string
     */
    public $rotationInterval;
    protected $_name = [
        'enableAutomaticRotation' => 'EnableAutomaticRotation',
        'keyId'                   => 'KeyId',
        'rotationInterval'        => 'RotationInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableAutomaticRotation) {
            $res['EnableAutomaticRotation'] = $this->enableAutomaticRotation;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRotationPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableAutomaticRotation'])) {
            $model->enableAutomaticRotation = $map['EnableAutomaticRotation'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }

        return $model;
    }
}
