<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeWorkflowResponseBody;

use AlibabaCloud\Tea\Model;

class taskRelations extends Model
{
    /**
     * @example relation_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 1234
     *
     * @var int
     */
    public $postTaskId;

    /**
     * @example 2
     *
     * @var int
     */
    public $postTaskVersion;

    /**
     * @example 123
     *
     * @var int
     */
    public $preTaskId;

    /**
     * @example 1
     *
     * @var int
     */
    public $preTaskVersion;
    protected $_name = [
        'name'            => 'name',
        'postTaskId'      => 'postTaskId',
        'postTaskVersion' => 'postTaskVersion',
        'preTaskId'       => 'preTaskId',
        'preTaskVersion'  => 'preTaskVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->postTaskId) {
            $res['postTaskId'] = $this->postTaskId;
        }
        if (null !== $this->postTaskVersion) {
            $res['postTaskVersion'] = $this->postTaskVersion;
        }
        if (null !== $this->preTaskId) {
            $res['preTaskId'] = $this->preTaskId;
        }
        if (null !== $this->preTaskVersion) {
            $res['preTaskVersion'] = $this->preTaskVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['postTaskId'])) {
            $model->postTaskId = $map['postTaskId'];
        }
        if (isset($map['postTaskVersion'])) {
            $model->postTaskVersion = $map['postTaskVersion'];
        }
        if (isset($map['preTaskId'])) {
            $model->preTaskId = $map['preTaskId'];
        }
        if (isset($map['preTaskVersion'])) {
            $model->preTaskVersion = $map['preTaskVersion'];
        }

        return $model;
    }
}
