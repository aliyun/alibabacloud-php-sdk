<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\DataIngestion\actions;
use AlibabaCloud\SDK\Imm\V20200930\Models\DataIngestion\notification;
use AlibabaCloud\SDK\Imm\V20200930\Models\DataIngestion\statistic;
use AlibabaCloud\Tea\Model;

class DataIngestion extends Model
{
    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $id;

    /**
     * @var Input
     */
    public $input;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var notification
     */
    public $notification;

    /**
     * @var string
     */
    public $state;

    /**
     * @var statistic
     */
    public $statistic;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'actions'      => 'Actions',
        'createTime'   => 'CreateTime',
        'error'        => 'Error',
        'id'           => 'Id',
        'input'        => 'Input',
        'marker'       => 'Marker',
        'notification' => 'Notification',
        'state'        => 'State',
        'statistic'    => 'Statistic',
        'tags'         => 'Tags',
        'updateTime'   => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['Actions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->statistic) {
            $res['Statistic'] = null !== $this->statistic ? $this->statistic->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataIngestion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n              = 0;
                foreach ($map['Actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? actions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Input'])) {
            $model->input = Input::fromMap($map['Input']);
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['Notification'])) {
            $model->notification = notification::fromMap($map['Notification']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Statistic'])) {
            $model->statistic = statistic::fromMap($map['Statistic']);
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
