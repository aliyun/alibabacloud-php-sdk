<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaPluginStatusResponseBody;

use AlibabaCloud\Dara\Model;

class installStatus extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var bool
     */
    public $installStatus;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'installStatus' => 'InstallStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
