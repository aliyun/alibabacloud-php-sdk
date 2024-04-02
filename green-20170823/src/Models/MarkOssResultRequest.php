<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class MarkOssResultRequest extends Model
{
    /**
     * @var string
     */
    public $ids;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var bool
     */
    public $stock;
    protected $_name = [
        'ids'          => 'Ids',
        'lang'         => 'Lang',
        'operation'    => 'Operation',
        'resourceType' => 'ResourceType',
        'scene'        => 'Scene',
        'sourceIp'     => 'SourceIp',
        'stock'        => 'Stock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->stock) {
            $res['Stock'] = $this->stock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MarkOssResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Stock'])) {
            $model->stock = $map['Stock'];
        }

        return $model;
    }
}
