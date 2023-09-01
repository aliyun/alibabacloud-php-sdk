<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListServiceTemplatesRequest extends Model
{
    /**
     * @example aigc
     *
     * @var string
     */
    public $label;

    /**
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example pai
     *
     * @var string
     */
    public $provider;

    /**
     * @example aigc
     *
     * @var string
     */
    public $query;

    /**
     * @example stable_diffusion_aigc
     *
     * @var string
     */
    public $serviceTemplateName;

    /**
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'label'               => 'Label',
        'order'               => 'Order',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'provider'            => 'Provider',
        'query'               => 'Query',
        'serviceTemplateName' => 'ServiceTemplateName',
        'sortBy'              => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->serviceTemplateName) {
            $res['ServiceTemplateName'] = $this->serviceTemplateName;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['ServiceTemplateName'])) {
            $model->serviceTemplateName = $map['ServiceTemplateName'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
