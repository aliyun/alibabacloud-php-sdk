<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListSceneItemsRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $operationRuleId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example PREVIEW_ITEM
     *
     * @var string
     */
    public $previewType;

    /**
     * @example 20
     *
     * @var int
     */
    public $queryCount;

    /**
     * @example 1
     *
     * @var string
     */
    public $selectionRuleId;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'operationRuleId' => 'operationRuleId',
        'page'            => 'page',
        'previewType'     => 'previewType',
        'queryCount'      => 'queryCount',
        'selectionRuleId' => 'selectionRuleId',
        'size'            => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationRuleId) {
            $res['operationRuleId'] = $this->operationRuleId;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->previewType) {
            $res['previewType'] = $this->previewType;
        }
        if (null !== $this->queryCount) {
            $res['queryCount'] = $this->queryCount;
        }
        if (null !== $this->selectionRuleId) {
            $res['selectionRuleId'] = $this->selectionRuleId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['operationRuleId'])) {
            $model->operationRuleId = $map['operationRuleId'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['previewType'])) {
            $model->previewType = $map['previewType'];
        }
        if (isset($map['queryCount'])) {
            $model->queryCount = $map['queryCount'];
        }
        if (isset($map['selectionRuleId'])) {
            $model->selectionRuleId = $map['selectionRuleId'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
