<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponseBody\data\applicationList;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponseBody\data\entryApplication;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The list of all applications that are related to the lane group.
     *
     * @var applicationList
     */
    public $applicationList;

    /**
     * @description The information about the Enterprise Distributed Application Service (EDAS) ingress gateway.
     *
     * @var entryApplication
     */
    public $entryApplication;

    /**
     * @description The ID of the lane group.
     *
     * @example 64
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the lane group.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-hangzhou:test
     *
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'applicationList'  => 'ApplicationList',
        'entryApplication' => 'EntryApplication',
        'id'               => 'Id',
        'name'             => 'Name',
        'namespaceId'      => 'NamespaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationList) {
            $res['ApplicationList'] = null !== $this->applicationList ? $this->applicationList->toMap() : null;
        }
        if (null !== $this->entryApplication) {
            $res['EntryApplication'] = null !== $this->entryApplication ? $this->entryApplication->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationList'])) {
            $model->applicationList = applicationList::fromMap($map['ApplicationList']);
        }
        if (isset($map['EntryApplication'])) {
            $model->entryApplication = entryApplication::fromMap($map['EntryApplication']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
