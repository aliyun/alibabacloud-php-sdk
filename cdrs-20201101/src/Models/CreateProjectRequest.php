<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $aggregateSceneCode;
    protected $_name = [
        'name'               => 'Name',
        'icon'               => 'Icon',
        'description'        => 'Description',
        'aggregateSceneCode' => 'AggregateSceneCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->aggregateSceneCode) {
            $res['AggregateSceneCode'] = $this->aggregateSceneCode;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AggregateSceneCode'])) {
            $model->aggregateSceneCode = $map['AggregateSceneCode'];
        }

        return $model;
    }
}
