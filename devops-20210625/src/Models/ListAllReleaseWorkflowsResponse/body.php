<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListAllReleaseWorkflowsResponse;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListAllReleaseWorkflowsResponse\body\releaseStages;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @example testApp
     *
     * @var string
     */
    public $appName;

    /**
     * @example ce51b31b996246ecaf874736838360b2
     *
     * @var string
     */
    public $sn;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var string
     */
    public $order;

    /**
     * @var releaseStages[]
     */
    public $releaseStages;

    /**
     * @example ""
     *
     * @var string
     */
    public $note;
    protected $_name = [
        'appName'       => 'appName',
        'sn'            => 'sn',
        'name'          => 'name',
        'order'         => 'order',
        'releaseStages' => 'releaseStages',
        'note'          => 'note',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->releaseStages) {
            $res['releaseStages'] = [];
            if (null !== $this->releaseStages && \is_array($this->releaseStages)) {
                $n = 0;
                foreach ($this->releaseStages as $item) {
                    $res['releaseStages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->note) {
            $res['note'] = $this->note;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['sn'])) {
            $model->sn = $map['sn'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['releaseStages'])) {
            if (!empty($map['releaseStages'])) {
                $model->releaseStages = [];
                $n                    = 0;
                foreach ($map['releaseStages'] as $item) {
                    $model->releaseStages[$n++] = null !== $item ? releaseStages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['note'])) {
            $model->note = $map['note'];
        }

        return $model;
    }
}
