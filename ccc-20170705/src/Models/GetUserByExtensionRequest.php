<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class GetUserByExtensionRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $extension;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'extension'  => 'Extension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserByExtensionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        return $model;
    }
}
