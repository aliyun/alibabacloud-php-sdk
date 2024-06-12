<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteRemediationsRequest extends Model
{
    /**
     * @description The ID of the remediation template. Separate multiple remediation template IDs with commas (,).
     *
     * This parameter is required.
     * @example crr-909ba2d4716700eb****
     *
     * @var string
     */
    public $remediationIds;
    protected $_name = [
        'remediationIds' => 'RemediationIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediationIds) {
            $res['RemediationIds'] = $this->remediationIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRemediationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemediationIds'])) {
            $model->remediationIds = $map['RemediationIds'];
        }

        return $model;
    }
}
