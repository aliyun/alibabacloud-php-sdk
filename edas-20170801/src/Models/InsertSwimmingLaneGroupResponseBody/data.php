<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponseBody\data\applicationList;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponseBody\data\entryApplication;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var applicationList
     */
    public $applicationList;

    /**
     * @var entryApplication
     */
    public $entryApplication;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'namespaceId'      => 'NamespaceId',
        'applicationList'  => 'ApplicationList',
        'entryApplication' => 'EntryApplication',
        'name'             => 'Name',
        'id'               => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->applicationList) {
            $res['ApplicationList'] = null !== $this->applicationList ? $this->applicationList->toMap() : null;
        }
        if (null !== $this->entryApplication) {
            $res['EntryApplication'] = null !== $this->entryApplication ? $this->entryApplication->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['ApplicationList'])) {
            $model->applicationList = applicationList::fromMap($map['ApplicationList']);
        }
        if (isset($map['EntryApplication'])) {
            $model->entryApplication = entryApplication::fromMap($map['EntryApplication']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
