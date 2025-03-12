<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttachmentAttributesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example i-bp67acfmxazb4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the private pool. If the value of `PrivatePoolOptionsMatchCriteria` is `Open`, the value of PrivatePoolOptionsId is the ID of the private pool that is automatically matched to the instance.
     *
     * @example eap-bp67acfmxazb4****
     *
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @description The match mode of the private pool. Valid values:
     *
     *   Open: open private pool. Instances automatically match an open private pool.
     *   Target: specified private pool. Instances match a specified private pool.
     *   None: no private pool. Instances do not use private pools.
     *
     * @example Open
     *
     * @var string
     */
    public $privatePoolOptionsMatchCriteria;
    protected $_name = [
        'instanceId'                      => 'InstanceId',
        'privatePoolOptionsId'            => 'PrivatePoolOptionsId',
        'privatePoolOptionsMatchCriteria' => 'PrivatePoolOptionsMatchCriteria',
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
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }
        if (null !== $this->privatePoolOptionsMatchCriteria) {
            $res['PrivatePoolOptionsMatchCriteria'] = $this->privatePoolOptionsMatchCriteria;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }
        if (isset($map['PrivatePoolOptionsMatchCriteria'])) {
            $model->privatePoolOptionsMatchCriteria = $map['PrivatePoolOptionsMatchCriteria'];
        }

        return $model;
    }
}
