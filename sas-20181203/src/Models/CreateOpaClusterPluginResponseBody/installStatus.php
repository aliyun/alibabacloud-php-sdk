<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateOpaClusterPluginResponseBody;

use AlibabaCloud\Tea\Model;

class installStatus extends Model
{
    /**
     * @example c60b77fe62093480db6164a3c2fa****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example true
     *
     * @var bool
     */
    public $installStatus;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'installStatus' => 'InstallStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->installStatus) {
            $res['InstallStatus'] = $this->installStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return installStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstallStatus'])) {
            $model->installStatus = $map['InstallStatus'];
        }

        return $model;
    }
}
