<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Dara\Model;

class ListGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $appGroupName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespaceSource;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appGroupName' => 'AppGroupName',
        'namespace' => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appGroupName) {
            $res['AppGroupName'] = $this->appGroupName;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGroupName'])) {
            $model->appGroupName = $map['AppGroupName'];
        }

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
