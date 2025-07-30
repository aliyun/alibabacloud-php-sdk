<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Tea\Model;

class QueryUpgradableVersionsRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example c-b25e21e24388****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether to query the minor versions that you can upgrade to. Default value: true. Valid values:
     *
     *   true: The minor versions that you can upgrade to.
     *   false: The major versions that you can upgrade to.
     *
     * @example true
     *
     * @var bool
     */
    public $minor;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'minor' => 'Minor',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->minor) {
            $res['Minor'] = $this->minor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUpgradableVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Minor'])) {
            $model->minor = $map['Minor'];
        }

        return $model;
    }
}
