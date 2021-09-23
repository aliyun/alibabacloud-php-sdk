<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Binding extends Model
{
    /**
     * @description ProjectName
     *
     * @var string
     */
    public $projectName;

    /**
     * @description DatasetName
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description URI
     *
     * @var string
     */
    public $URI;

    /**
     * @description State
     *
     * @var string
     */
    public $state;

    /**
     * @description Phase
     *
     * @var string
     */
    public $phase;

    /**
     * @description Detail
     *
     * @var string
     */
    public $detail;

    /**
     * @description CreateTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description UpdateTime
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'projectName' => 'ProjectName',
        'datasetName' => 'DatasetName',
        'URI'         => 'URI',
        'state'       => 'State',
        'phase'       => 'Phase',
        'detail'      => 'Detail',
        'createTime'  => 'CreateTime',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Binding
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
