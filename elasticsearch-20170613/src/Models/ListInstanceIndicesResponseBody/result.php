<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceIndicesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The name of the Elasticsearch index.
     *
     * @example 2021-01-11T05:49:41.114Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example green
     *
     * @var string
     */
    public $health;

    /**
     * @example {    "indices": {         ".ds-console-2021.08.18-000002": {             "index": ".ds-console-2021.08.18-000002",             "managed": true,             "policy": "console",             "lifecycle_date_millis": 1629277498775,             "age": "2.64h",             "phase": "hot",             "phase_time_millis": 1629277450334,             "action": "complete",             "action_time_millis": 1629278605586,             "step": "complete",             "step_time_millis": 1629278605586,             "phase_execution": {                 "policy": "console",                 "phase_definition": {                     "min_age": "0s",                     "actions": {                         "rollover": {                             "max_size": "1gb",                             "max_age": "1d",                             "max_docs": 10000                         },                         "set_priority": {                             "priority": 1000                         }                     }                 },                 "version": 1,                 "modified_date_in_millis": 1629277370953             }         }     } }
     *
     * @var string
     */
    public $ilmExplain;

    /**
     * @description The managed status of the index. The following three statuses are supported:
     *
     *   following: Hosting.
     *   closing: The instance is being unhosted.
     *   closed: unmanaged.
     *
     * @example false
     *
     * @var string
     */
    public $isManaged;

    /**
     * @description The current storage lifecycle. Value meaning:
     *
     *   warm: warm.
     *   cold: the cold phase.
     *   hot: hot phase.
     *   delete: deletes a stage.
     *
     * >  If this parameter is empty, the current index is not managed by the lifecycle.
     * @example closing
     *
     * @var string
     */
    public $managedStatus;

    /**
     * @description The full lifecycle status of the current index.
     *
     * @example .kibana_task_manager_1
     *
     * @var string
     */
    public $name;

    /**
     * @example warm
     *
     * @var string
     */
    public $phase;

    /**
     * @description The running status of the index. The following three statuses are supported:
     *
     *   green: healthy.
     *   yellow: alerts.
     *   red: an exception.
     *
     * @example 49298589
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'createTime'    => 'createTime',
        'health'        => 'health',
        'ilmExplain'    => 'ilmExplain',
        'isManaged'     => 'isManaged',
        'managedStatus' => 'managedStatus',
        'name'          => 'name',
        'phase'         => 'phase',
        'size'          => 'size',
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
        if (null !== $this->health) {
            $res['health'] = $this->health;
        }
        if (null !== $this->ilmExplain) {
            $res['ilmExplain'] = $this->ilmExplain;
        }
        if (null !== $this->isManaged) {
            $res['isManaged'] = $this->isManaged;
        }
        if (null !== $this->managedStatus) {
            $res['managedStatus'] = $this->managedStatus;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['health'])) {
            $model->health = $map['health'];
        }
        if (isset($map['ilmExplain'])) {
            $model->ilmExplain = $map['ilmExplain'];
        }
        if (isset($map['isManaged'])) {
            $model->isManaged = $map['isManaged'];
        }
        if (isset($map['managedStatus'])) {
            $model->managedStatus = $map['managedStatus'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
