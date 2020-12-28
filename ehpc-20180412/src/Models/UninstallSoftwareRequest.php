<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class UninstallSoftwareRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $application;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'application' => 'Application',
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
        if (null !== $this->application) {
            $res['Application'] = $this->application;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UninstallSoftwareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Application'])) {
            $model->application = $map['Application'];
        }

        return $model;
    }
}
