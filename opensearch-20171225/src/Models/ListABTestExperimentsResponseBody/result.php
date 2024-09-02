<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestExperimentsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the experiment was created.
     *
     * @example 1588842080
     *
     * @var int
     */
    public $created;

    /**
     * @description The experiment ID.
     *
     * @example 12888
     *
     * @var string
     */
    public $id;

    /**
     * @description The group alias.
     *
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the experiment is in effect. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @description The experiment parameters.
     *
     * @example 1
     *
     * @var mixed[]
     */
    public $params;

    /**
     * @description The percentage of traffic that is routed to the experiment.
     *
     * Valid values: [0,100]
     * @example 30
     *
     * @var int
     */
    public $traffic;

    /**
     * @description The time when the experiment was last modified.
     *
     * @example 1588842080
     *
     * @var int
     */
    public $updated;
    protected $_name = [
        'created' => 'created',
        'id'      => 'id',
        'name'    => 'name',
        'online'  => 'online',
        'params'  => 'params',
        'traffic' => 'traffic',
        'updated' => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->online) {
            $res['online'] = $this->online;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->traffic) {
            $res['traffic'] = $this->traffic;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
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
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['online'])) {
            $model->online = $map['online'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['traffic'])) {
            $model->traffic = $map['traffic'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
