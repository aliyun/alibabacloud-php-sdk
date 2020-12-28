<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttachmentAttributesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $privatePoolOptionsMatchCriteria;

    /**
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'privatePoolOptionsMatchCriteria' => 'PrivatePoolOptionsMatchCriteria',
        'privatePoolOptionsId'            => 'PrivatePoolOptionsId',
        'instanceId'                      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privatePoolOptionsMatchCriteria) {
            $res['PrivatePoolOptionsMatchCriteria'] = $this->privatePoolOptionsMatchCriteria;
        }
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivatePoolOptionsMatchCriteria'])) {
            $model->privatePoolOptionsMatchCriteria = $map['PrivatePoolOptionsMatchCriteria'];
        }
        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
