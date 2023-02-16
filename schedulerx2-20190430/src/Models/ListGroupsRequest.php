<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class ListGroupsRequest extends Model
{
    /**
     * @description The namespace. You can obtain the namespace on the **Namespace** page in Distributed Task Scheduling Platform.
     *
     * @example 1a72ecb1-b4cc-400a-a71b-20cdec9b****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Required only for a special third party.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The ID of the region in which the application is located.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'namespace'       => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
