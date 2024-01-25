<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListProductVersionConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $componentReleaseName;

    /**
     * @example component
     *
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $fuzzy;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $parameter;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'componentReleaseName' => 'componentReleaseName',
        'configType'           => 'configType',
        'fuzzy'                => 'fuzzy',
        'pageNum'              => 'pageNum',
        'pageSize'             => 'pageSize',
        'parameter'            => 'parameter',
        'scope'                => 'scope',
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
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
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
        if (null !== $this->parameter) {
            $res['parameter'] = $this->parameter;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductVersionConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentReleaseName'])) {
            $model->componentReleaseName = $map['componentReleaseName'];
        }
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
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
        if (isset($map['parameter'])) {
            $model->parameter = $map['parameter'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        return $model;
    }
}
