<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListAllReleaseWorkflowsResponse;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListAllReleaseWorkflowsResponse\body\releaseStages;

class body extends Model
{
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $sn;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $order;
    /**
     * @var releaseStages[]
     */
    public $releaseStages;
    /**
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
        if (\is_array($this->releaseStages)) {
            Model::validateArray($this->releaseStages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->releaseStages)) {
                $res['releaseStages'] = [];
                $n1                   = 0;
                foreach ($this->releaseStages as $item1) {
                    $res['releaseStages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->note) {
            $res['note'] = $this->note;
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
                $n1                   = 0;
                foreach ($map['releaseStages'] as $item1) {
                    $model->releaseStages[$n1++] = releaseStages::fromMap($item1);
                }
            }
        }

        if (isset($map['note'])) {
            $model->note = $map['note'];
        }

        return $model;
    }
}
