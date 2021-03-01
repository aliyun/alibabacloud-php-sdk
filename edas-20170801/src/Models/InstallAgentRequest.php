<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InstallAgentRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var bool
     */
    public $doAsync;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'instanceIds' => 'InstanceIds',
        'doAsync'     => 'DoAsync',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->doAsync) {
            $res['DoAsync'] = $this->doAsync;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['DoAsync'])) {
            $model->doAsync = $map['DoAsync'];
        }

        return $model;
    }
}
