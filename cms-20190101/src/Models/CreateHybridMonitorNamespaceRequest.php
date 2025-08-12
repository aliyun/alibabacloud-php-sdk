<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class CreateHybridMonitorNamespaceRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespaceRegion;

    /**
     * @var string
     */
    public $namespaceType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'description' => 'Description',
        'namespace' => 'Namespace',
        'namespaceRegion' => 'NamespaceRegion',
        'namespaceType' => 'NamespaceType',
        'regionId' => 'RegionId',
        'spec' => 'Spec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->namespaceRegion) {
            $res['NamespaceRegion'] = $this->namespaceRegion;
        }

        if (null !== $this->namespaceType) {
            $res['NamespaceType'] = $this->namespaceType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NamespaceRegion'])) {
            $model->namespaceRegion = $map['NamespaceRegion'];
        }

        if (isset($map['NamespaceType'])) {
            $model->namespaceType = $map['NamespaceType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
