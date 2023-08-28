<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceTasksResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceTasksResponseBody\result\tags;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceTasksResponseBody\result\taskNodes;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $extraAttribute;

    /**
     * @example ""
     *
     * @var string
     */
    public $field3;

    /**
     * @description fsmId
     *
     * @example tisplus_opensearch@datasource_flow_fsm@1062017779051424-ha-cn-2r42ostoc01_ecom_table@vpc_hz_domain_1@null@MANUAL-ha-cn-2r42ostoc01_ecom_table@1655974525756@006754
     *
     * @var string
     */
    public $fsmId;

    /**
     * @description ### Method
     *
     * ```
     * @example " "
     *
     * @var string
     */
    public $groupType;

    /**
     * @description Displays data source tasks.
     *
     * @example general
     *
     * @var string
     */
    public $name;

    /**
     * @example 2
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var taskNodes[]
     */
    public $taskNodes;

    /**
     * @example 1646279473
     *
     * @var string
     */
    public $time;

    /**
     * @example search
     *
     * @var string
     */
    public $type;

    /**
     * @example ""
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'extraAttribute' => 'extraAttribute',
        'field3'         => 'field3',
        'fsmId'          => 'fsmId',
        'groupType'      => 'groupType',
        'name'           => 'name',
        'status'         => 'status',
        'tags'           => 'tags',
        'taskNodes'      => 'taskNodes',
        'time'           => 'time',
        'type'           => 'type',
        'user'           => 'user',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraAttribute) {
            $res['extraAttribute'] = $this->extraAttribute;
        }
        if (null !== $this->field3) {
            $res['field3'] = $this->field3;
        }
        if (null !== $this->fsmId) {
            $res['fsmId'] = $this->fsmId;
        }
        if (null !== $this->groupType) {
            $res['groupType'] = $this->groupType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskNodes) {
            $res['taskNodes'] = [];
            if (null !== $this->taskNodes && \is_array($this->taskNodes)) {
                $n = 0;
                foreach ($this->taskNodes as $item) {
                    $res['taskNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->user) {
            $res['user'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['extraAttribute'])) {
            $model->extraAttribute = $map['extraAttribute'];
        }
        if (isset($map['field3'])) {
            $model->field3 = $map['field3'];
        }
        if (isset($map['fsmId'])) {
            $model->fsmId = $map['fsmId'];
        }
        if (isset($map['groupType'])) {
            $model->groupType = $map['groupType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taskNodes'])) {
            if (!empty($map['taskNodes'])) {
                $model->taskNodes = [];
                $n                = 0;
                foreach ($map['taskNodes'] as $item) {
                    $model->taskNodes[$n++] = null !== $item ? taskNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
