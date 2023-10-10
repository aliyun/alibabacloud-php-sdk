<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSwimmingLaneGroupResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListSwimmingLaneGroupResponseBody\data\applicationList;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListSwimmingLaneGroupResponseBody\data\entryApplication;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The applications that are related to the lane group.
     *
     * @var applicationList[]
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
     * @example 257
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the lane group.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the microservices namespace.
     *
     * @example cn-shanghai:daily
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
            $res['ApplicationList'] = [];
            if (null !== $this->applicationList && \is_array($this->applicationList)) {
                $n = 0;
                foreach ($this->applicationList as $item) {
                    $res['ApplicationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['ApplicationList'])) {
                $model->applicationList = [];
                $n                      = 0;
                foreach ($map['ApplicationList'] as $item) {
                    $model->applicationList[$n++] = null !== $item ? applicationList::fromMap($item) : $item;
                }
            }
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
