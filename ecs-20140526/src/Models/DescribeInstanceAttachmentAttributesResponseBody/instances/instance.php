<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttachmentAttributesResponseBody\instances;

use AlibabaCloud\Dara\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $privatePoolOptionsId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
