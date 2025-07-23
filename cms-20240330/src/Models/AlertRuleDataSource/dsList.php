<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleDataSource;

use AlibabaCloud\Tea\Model;

class dsList extends Model
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
    public $type;
    protected $_name = [
        'project' => 'project',
        'regionId' => 'regionId',
        'store' => 'store',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dsList
     */
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
