<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ImportNacosConfigRequest extends Model
{
    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $policy;
    protected $_name = [
        'fileUrl'     => 'FileUrl',
        'instanceId'  => 'InstanceId',
        'namespaceId' => 'NamespaceId',
        'policy'      => 'Policy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportNacosConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}
