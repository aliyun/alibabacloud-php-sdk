<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionInstancesRequest extends Model
{
    /**
     * @description The type of the feature.
     *
     * @example "PAAS"
     *
     * @var string
     */
    public $functionType;

    /**
     * @description The type of the model.
     *
     * @example tf_checkpoint
     *
     * @var string
     */
    public $modelType;

    /**
     * @description The richness of the returned information. Valid values:
     *
     *   normal: displays information such as createParameters and cron. This is the default value.
     *   simple: displays only the basic information.
     *   detail: returns the details of the training task.
     *
     * @example normal
     *
     * @var string
     */
    public $output;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description How the instance is created. Valid values:
     *
     *   builtin: The instance is created by system.
     *   user: The instance is created by user. This is the default value.
     *   all: all instances
     *
     * @example user
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
