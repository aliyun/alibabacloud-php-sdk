<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\GetDiskResponseBody\disk;

use AlibabaCloud\Tea\Model;

class attachments extends Model
{
    /**
     * @description The time when the disk was attached.
     *
     * @example 2021-11-18T19:30:16+08:00
     *
     * @var string
     */
    public $attachedTime;

    /**
     * @description The instance ID.
     *
     * @example i-cad***********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the namespace.
     *
     * @example 308e2*****************
     *
     * @var int
     */
    public $namespaceId;
    protected $_name = [
        'attachedTime' => 'AttachedTime',
        'instanceId'   => 'InstanceId',
        'namespaceId'  => 'NamespaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachedTime) {
            $res['AttachedTime'] = $this->attachedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachedTime'])) {
            $model->attachedTime = $map['AttachedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
