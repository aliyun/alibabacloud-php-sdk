<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListProductInstanceConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $componentReleaseName;

    /**
     * @var string
     */
    public $environmentUID;

    /**
     * @var string
     */
    public $fuzzy;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @example component/global
     *
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $parameter;

    /**
     * @var string
     */
    public $productVersionUID;
    protected $_name = [
        'componentReleaseName' => 'componentReleaseName',
        'environmentUID'       => 'environmentUID',
        'fuzzy'                => 'fuzzy',
        'pageNum'              => 'pageNum',
        'pageSize'             => 'pageSize',
        'paramType'            => 'paramType',
        'parameter'            => 'parameter',
        'productVersionUID'    => 'productVersionUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentReleaseName) {
            $res['componentReleaseName'] = $this->componentReleaseName;
        }
        if (null !== $this->environmentUID) {
            $res['environmentUID'] = $this->environmentUID;
        }
        if (null !== $this->fuzzy) {
            $res['fuzzy'] = $this->fuzzy;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->paramType) {
            $res['paramType'] = $this->paramType;
        }
        if (null !== $this->parameter) {
            $res['parameter'] = $this->parameter;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductInstanceConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentReleaseName'])) {
            $model->componentReleaseName = $map['componentReleaseName'];
        }
        if (isset($map['environmentUID'])) {
            $model->environmentUID = $map['environmentUID'];
        }
        if (isset($map['fuzzy'])) {
            $model->fuzzy = $map['fuzzy'];
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['paramType'])) {
            $model->paramType = $map['paramType'];
        }
        if (isset($map['parameter'])) {
            $model->parameter = $map['parameter'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }

        return $model;
    }
}
