<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListModuleVersionResponseBody;

use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourcePath;
    protected $_name = [
        'createTime'    => 'createTime',
        'description'   => 'description',
        'moduleId'      => 'moduleId',
        'moduleVersion' => 'moduleVersion',
        'name'          => 'name',
        'sourcePath'    => 'sourcePath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sourcePath) {
            $res['sourcePath'] = $this->sourcePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['sourcePath'])) {
            $model->sourcePath = $map['sourcePath'];
        }

        return $model;
    }
}
