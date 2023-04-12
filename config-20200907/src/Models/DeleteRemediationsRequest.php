<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteRemediationsRequest extends Model
{
    /**
     * @description The ID of the remediation setting. If you want to specify multiple IDs, separate them with commas (,).
     *
     * You can call the [ListRemediations](~~270772~~) operation to obtain the remediation setting ID.
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
