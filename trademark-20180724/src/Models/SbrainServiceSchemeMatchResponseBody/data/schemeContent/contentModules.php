<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceSchemeMatchResponseBody\data\schemeContent;

use AlibabaCloud\Tea\Model;

class contentModules extends Model
{
    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $moduleData;

    /**
     * @var string
     */
    public $moduleDataSource;

    /**
     * @var string
     */
    public $moduleDataSourceType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'tag'                  => 'Tag',
        'action'               => 'action',
        'moduleData'           => 'moduleData',
        'moduleDataSource'     => 'moduleDataSource',
        'moduleDataSourceType' => 'moduleDataSourceType',
        'name'                 => 'name',
        'target'               => 'target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->moduleData) {
            $res['moduleData'] = $this->moduleData;
        }
        if (null !== $this->moduleDataSource) {
            $res['moduleDataSource'] = $this->moduleDataSource;
        }
        if (null !== $this->moduleDataSourceType) {
            $res['moduleDataSourceType'] = $this->moduleDataSourceType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contentModules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['moduleData'])) {
            $model->moduleData = $map['moduleData'];
        }
        if (isset($map['moduleDataSource'])) {
            $model->moduleDataSource = $map['moduleDataSource'];
        }
        if (isset($map['moduleDataSourceType'])) {
            $model->moduleDataSourceType = $map['moduleDataSourceType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        return $model;
    }
}
