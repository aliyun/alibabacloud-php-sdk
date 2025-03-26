<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdsRequest\tag;

class ListVpdsRequest extends Model
{
    /**
     * @var bool
     */
    public $enablePage;

    /**
     * @var string
     */
    public $filterErId;

    /**
     * @var bool
     */
    public $forSelect;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vpdId;

    /**
     * @var string
     */
    public $vpdName;

    /**
     * @var bool
     */
    public $withDependence;

    /**
     * @var bool
     */
    public $withoutVcc;
    protected $_name = [
        'enablePage' => 'EnablePage',
        'filterErId' => 'FilterErId',
        'forSelect' => 'ForSelect',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tag' => 'Tag',
        'vpdId' => 'VpdId',
        'vpdName' => 'VpdName',
        'withDependence' => 'WithDependence',
        'withoutVcc' => 'WithoutVcc',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }

        if (null !== $this->filterErId) {
            $res['FilterErId'] = $this->filterErId;
        }

        if (null !== $this->forSelect) {
            $res['ForSelect'] = $this->forSelect;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        if (null !== $this->vpdName) {
            $res['VpdName'] = $this->vpdName;
        }

        if (null !== $this->withDependence) {
            $res['WithDependence'] = $this->withDependence;
        }

        if (null !== $this->withoutVcc) {
            $res['WithoutVcc'] = $this->withoutVcc;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }

        if (isset($map['FilterErId'])) {
            $model->filterErId = $map['FilterErId'];
        }

        if (isset($map['ForSelect'])) {
            $model->forSelect = $map['ForSelect'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        if (isset($map['VpdName'])) {
            $model->vpdName = $map['VpdName'];
        }

        if (isset($map['WithDependence'])) {
            $model->withDependence = $map['WithDependence'];
        }

        if (isset($map['WithoutVcc'])) {
            $model->withoutVcc = $map['WithoutVcc'];
        }

        return $model;
    }
}
