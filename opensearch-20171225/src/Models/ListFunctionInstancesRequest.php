<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionInstancesRequest extends Model
{
    /**
     * @description 功能类型
     *
     * @var string
     */
    public $functionType;

    /**
     * @description 模型类型
     *
     * @var string
     */
    public $modelType;

    /**
     * @description 返回信息的丰富度
     *
     * @var string
     */
    public $output;

    /**
     * @description 页码
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 实例来源
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'functionType' => 'functionType',
        'modelType'    => 'modelType',
        'output'       => 'output',
        'pageNumber'   => 'pageNumber',
        'pageSize'     => 'pageSize',
        'source'       => 'source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionType) {
            $res['functionType'] = $this->functionType;
        }
        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }
        if (null !== $this->output) {
            $res['output'] = $this->output;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['functionType'])) {
            $model->functionType = $map['functionType'];
        }
        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }
        if (isset($map['output'])) {
            $model->output = $map['output'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
