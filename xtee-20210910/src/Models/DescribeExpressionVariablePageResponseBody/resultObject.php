<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExpressionVariablePageResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string[]
     */
    public $ruleList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'description' => 'description',
        'eventName' => 'eventName',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'name' => 'name',
        'outputs' => 'outputs',
        'ruleList' => 'ruleList',
        'status' => 'status',
        'title' => 'title',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->ruleList)) {
            Model::validateArray($this->ruleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->outputs) {
            $res['outputs'] = $this->outputs;
        }

        if (null !== $this->ruleList) {
            if (\is_array($this->ruleList)) {
                $res['ruleList'] = [];
                $n1 = 0;
                foreach ($this->ruleList as $item1) {
                    $res['ruleList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['outputs'])) {
            $model->outputs = $map['outputs'];
        }

        if (isset($map['ruleList'])) {
            if (!empty($map['ruleList'])) {
                $model->ruleList = [];
                $n1 = 0;
                foreach ($map['ruleList'] as $item1) {
                    $model->ruleList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
