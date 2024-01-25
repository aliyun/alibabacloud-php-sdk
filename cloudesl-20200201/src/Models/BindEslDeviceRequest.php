<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class BindEslDeviceRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $column;

    /**
     * @example 20
     *
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @example 18bc5a63****
     *
     * @var string
     */
    public $eslBarCode;

    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example 690560583****
     *
     * @var string
     */
    public $itemBarCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $layer;

    /**
     * @example 7
     *
     * @var string
     */
    public $layoutId;

    /**
     * @var string
     */
    public $layoutName;

    /**
     * @example 20200201
     *
     * @var string
     */
    public $shelf;

    /**
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'column'        => 'Column',
        'containerId'   => 'ContainerId',
        'containerName' => 'ContainerName',
        'eslBarCode'    => 'EslBarCode',
        'extraParams'   => 'ExtraParams',
        'itemBarCode'   => 'ItemBarCode',
        'layer'         => 'Layer',
        'layoutId'      => 'LayoutId',
        'layoutName'    => 'LayoutName',
        'shelf'         => 'Shelf',
        'storeId'       => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->layoutName) {
            $res['LayoutName'] = $this->layoutName;
        }
        if (null !== $this->shelf) {
            $res['Shelf'] = $this->shelf;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindEslDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['LayoutName'])) {
            $model->layoutName = $map['LayoutName'];
        }
        if (isset($map['Shelf'])) {
            $model->shelf = $map['Shelf'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
