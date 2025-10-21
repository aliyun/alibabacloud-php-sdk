<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\GetMemoryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cmsWorkspaceName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $longTtl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $permanent;

    /**
     * @var int
     */
    public $shortTtl;

    /**
     * @var string[]
     */
    public $strategy;
    protected $_name = [
        'cmsWorkspaceName' => 'cmsWorkspaceName',
        'createTime' => 'createTime',
        'longTtl' => 'longTtl',
        'name' => 'name',
        'permanent' => 'permanent',
        'shortTtl' => 'shortTtl',
        'strategy' => 'strategy',
    ];

    public function validate()
    {
        if (\is_array($this->strategy)) {
            Model::validateArray($this->strategy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cmsWorkspaceName) {
            $res['cmsWorkspaceName'] = $this->cmsWorkspaceName;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->longTtl) {
            $res['longTtl'] = $this->longTtl;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->permanent) {
            $res['permanent'] = $this->permanent;
        }

        if (null !== $this->shortTtl) {
            $res['shortTtl'] = $this->shortTtl;
        }

        if (null !== $this->strategy) {
            if (\is_array($this->strategy)) {
                $res['strategy'] = [];
                $n1 = 0;
                foreach ($this->strategy as $item1) {
                    $res['strategy'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['cmsWorkspaceName'])) {
            $model->cmsWorkspaceName = $map['cmsWorkspaceName'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['longTtl'])) {
            $model->longTtl = $map['longTtl'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['permanent'])) {
            $model->permanent = $map['permanent'];
        }

        if (isset($map['shortTtl'])) {
            $model->shortTtl = $map['shortTtl'];
        }

        if (isset($map['strategy'])) {
            if (!empty($map['strategy'])) {
                $model->strategy = [];
                $n1 = 0;
                foreach ($map['strategy'] as $item1) {
                    $model->strategy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
