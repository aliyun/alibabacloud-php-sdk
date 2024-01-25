<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListProductEnvironmentsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $compatibleProductVersionUID;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $optionsShrink;

    /**
     * @var string
     */
    public $platformsShrink;

    /**
     * @var string
     */
    public $productVersionSpecUID;

    /**
     * @var string
     */
    public $productVersionUID;
    protected $_name = [
        'compatibleProductVersionUID' => 'compatibleProductVersionUID',
        'envType'                     => 'envType',
        'optionsShrink'               => 'options',
        'platformsShrink'             => 'platforms',
        'productVersionSpecUID'       => 'productVersionSpecUID',
        'productVersionUID'           => 'productVersionUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compatibleProductVersionUID) {
            $res['compatibleProductVersionUID'] = $this->compatibleProductVersionUID;
        }
        if (null !== $this->envType) {
            $res['envType'] = $this->envType;
        }
        if (null !== $this->optionsShrink) {
            $res['options'] = $this->optionsShrink;
        }
        if (null !== $this->platformsShrink) {
            $res['platforms'] = $this->platformsShrink;
        }
        if (null !== $this->productVersionSpecUID) {
            $res['productVersionSpecUID'] = $this->productVersionSpecUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductEnvironmentsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['compatibleProductVersionUID'])) {
            $model->compatibleProductVersionUID = $map['compatibleProductVersionUID'];
        }
        if (isset($map['envType'])) {
            $model->envType = $map['envType'];
        }
        if (isset($map['options'])) {
            $model->optionsShrink = $map['options'];
        }
        if (isset($map['platforms'])) {
            $model->platformsShrink = $map['platforms'];
        }
        if (isset($map['productVersionSpecUID'])) {
            $model->productVersionSpecUID = $map['productVersionSpecUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }

        return $model;
    }
}
