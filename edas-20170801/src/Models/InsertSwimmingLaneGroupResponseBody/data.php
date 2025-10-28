<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponseBody\data\applicationList;
use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneGroupResponseBody\data\entryApplication;

class data extends Model
{
    /**
     * @var applicationList
     */
    public $applicationList;

    /**
     * @var entryApplication
     */
    public $entryApplication;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'applicationList' => 'ApplicationList',
        'entryApplication' => 'EntryApplication',
        'id' => 'Id',
        'name' => 'Name',
        'namespaceId' => 'NamespaceId',
    ];

    public function validate()
    {
        if (null !== $this->applicationList) {
            $this->applicationList->validate();
        }
        if (null !== $this->entryApplication) {
            $this->entryApplication->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationList) {
            $res['ApplicationList'] = null !== $this->applicationList ? $this->applicationList->toArray($noStream) : $this->applicationList;
        }

        if (null !== $this->entryApplication) {
            $res['EntryApplication'] = null !== $this->entryApplication ? $this->entryApplication->toArray($noStream) : $this->entryApplication;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
