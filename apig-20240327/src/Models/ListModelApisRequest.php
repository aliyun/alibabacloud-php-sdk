<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListModelApisRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var bool
     */
    public $includeLegacy;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $name;

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
    public $resourceGroupId;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'includeLegacy' => 'includeLegacy',
        'keyword' => 'keyword',
        'name' => 'name',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'resourceGroupId' => 'resourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->includeLegacy) {
            $res['includeLegacy'] = $this->includeLegacy;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['includeLegacy'])) {
            $model->includeLegacy = $map['includeLegacy'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        return $model;
    }
}
