<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @example vds
     *
     * @var string
     */
    public $aggregateSceneCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @example https://img.alicdn.com/tfs/TB1yccKi.png
     *
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'aggregateSceneCode' => 'AggregateSceneCode',
        'description'        => 'Description',
        'icon'               => 'Icon',
        'name'               => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregateSceneCode) {
            $res['AggregateSceneCode'] = $this->aggregateSceneCode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateSceneCode'])) {
            $model->aggregateSceneCode = $map['AggregateSceneCode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
