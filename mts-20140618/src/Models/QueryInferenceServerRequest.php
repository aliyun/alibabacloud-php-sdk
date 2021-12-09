<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class QueryInferenceServerRequest extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $maxPageSize;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'maxPageSize' => 'MaxPageSize',
        'modelType'   => 'ModelType',
        'pageNumber'  => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->maxPageSize) {
            $res['MaxPageSize'] = $this->maxPageSize;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInferenceServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MaxPageSize'])) {
            $model->maxPageSize = $map['MaxPageSize'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
