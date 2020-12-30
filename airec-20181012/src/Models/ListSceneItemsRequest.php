<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class ListSceneItemsRequest extends Model
{
    /**
     * @var string
     */
    public $operationRuleId;

    /**
     * @var string
     */
    public $selectionRuleId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $previewType;

    /**
     * @var int
     */
    public $queryCount;
    protected $_name = [
        'operationRuleId' => 'OperationRuleId',
        'selectionRuleId' => 'SelectionRuleId',
        'page'            => 'Page',
        'size'            => 'Size',
        'previewType'     => 'PreviewType',
        'queryCount'      => 'QueryCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationRuleId) {
            $res['OperationRuleId'] = $this->operationRuleId;
        }
        if (null !== $this->selectionRuleId) {
            $res['SelectionRuleId'] = $this->selectionRuleId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->previewType) {
            $res['PreviewType'] = $this->previewType;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSceneItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationRuleId'])) {
            $model->operationRuleId = $map['OperationRuleId'];
        }
        if (isset($map['SelectionRuleId'])) {
            $model->selectionRuleId = $map['SelectionRuleId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['PreviewType'])) {
            $model->previewType = $map['PreviewType'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }

        return $model;
    }
}
