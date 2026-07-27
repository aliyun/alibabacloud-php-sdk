<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class Stores extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $store;

    /**
     * @var string
     */
    public $storeType;
    protected $_name = [
        'project' => 'project',
        'regionId' => 'regionId',
        'store' => 'store',
        'storeType' => 'storeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->store) {
            $res['store'] = $this->store;
        }

        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
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
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['store'])) {
            $model->store = $map['store'];
        }

        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }

        return $model;
    }
}
