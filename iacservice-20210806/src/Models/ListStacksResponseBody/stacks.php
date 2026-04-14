<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListStacksResponseBody;

use AlibabaCloud\Dara\Model;

class stacks extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var string
     */
    public $stackDescription;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'name' => 'name',
        'source' => 'source',
        'sourcePath' => 'sourcePath',
        'stackDescription' => 'stackDescription',
        'stackId' => 'stackId',
        'stackName' => 'stackName',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sourcePath) {
            $res['sourcePath'] = $this->sourcePath;
        }

        if (null !== $this->stackDescription) {
            $res['stackDescription'] = $this->stackDescription;
        }

        if (null !== $this->stackId) {
            $res['stackId'] = $this->stackId;
        }

        if (null !== $this->stackName) {
            $res['stackName'] = $this->stackName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sourcePath'])) {
            $model->sourcePath = $map['sourcePath'];
        }

        if (isset($map['stackDescription'])) {
            $model->stackDescription = $map['stackDescription'];
        }

        if (isset($map['stackId'])) {
            $model->stackId = $map['stackId'];
        }

        if (isset($map['stackName'])) {
            $model->stackName = $map['stackName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
