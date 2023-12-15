<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $aggregateSceneCode;

    /**
     * @example cdrs7446408279386067
     *
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example https://img.alicdn.com/tfs/TB1ccKi.png
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
        'corpId'             => 'CorpId',
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
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
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
     * @return UpdateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateSceneCode'])) {
            $model->aggregateSceneCode = $map['AggregateSceneCode'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
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
