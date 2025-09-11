<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRoutinesResponseBody;

use AlibabaCloud\Dara\Model;

class routines extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $defaultRelatedRecord;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $hasAssets;

    /**
     * @var string
     */
    public $routineName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultRelatedRecord' => 'DefaultRelatedRecord',
        'description' => 'Description',
        'hasAssets' => 'HasAssets',
        'routineName' => 'RoutineName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultRelatedRecord) {
            $res['DefaultRelatedRecord'] = $this->defaultRelatedRecord;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hasAssets) {
            $res['HasAssets'] = $this->hasAssets;
        }

        if (null !== $this->routineName) {
            $res['RoutineName'] = $this->routineName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefaultRelatedRecord'])) {
            $model->defaultRelatedRecord = $map['DefaultRelatedRecord'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HasAssets'])) {
            $model->hasAssets = $map['HasAssets'];
        }

        if (isset($map['RoutineName'])) {
            $model->routineName = $map['RoutineName'];
        }

        return $model;
    }
}
