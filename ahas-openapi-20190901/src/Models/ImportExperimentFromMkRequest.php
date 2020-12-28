<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ImportExperimentFromMkRequest extends Model
{
    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $nameSpace;

    /**
     * @var string
     */
    public $importUserId;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'definition'   => 'Definition',
        'name'         => 'Name',
        'description'  => 'Description',
        'nameSpace'    => 'NameSpace',
        'importUserId' => 'ImportUserId',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }
        if (null !== $this->importUserId) {
            $res['ImportUserId'] = $this->importUserId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportExperimentFromMkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }
        if (isset($map['ImportUserId'])) {
            $model->importUserId = $map['ImportUserId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
