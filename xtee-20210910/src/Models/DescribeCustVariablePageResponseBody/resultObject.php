<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeCustVariablePageResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $dataVersion;

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
    protected $_name = [
        'dataVersion' => 'dataVersion',
        'description' => 'description',
        'eventName' => 'eventName',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'name' => 'name',
        'ruleList' => 'ruleList',
        'status' => 'status',
        'title' => 'title',
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
        if (null !== $this->dataVersion) {
            $res['dataVersion'] = $this->dataVersion;
        }

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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataVersion'])) {
            $model->dataVersion = $map['dataVersion'];
        }

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

        return $model;
    }
}
