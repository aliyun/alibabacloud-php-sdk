<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class UpdateEnvironmentProductVersionRequest extends Model
{
    /**
     * @var string
     */
    public $oldProductVersionSpecUID;

    /**
     * @example 9cb5d348-7c0a-4428-8ed1-xxx
     *
     * @var string
     */
    public $oldProductVersionUID;

    /**
     * @var string
     */
    public $productVersionSpecUID;

    /**
     * @example 1280876d-d548-45cb-bd90-xxx
     *
     * @var string
     */
    public $productVersionUID;
    protected $_name = [
        'oldProductVersionSpecUID' => 'oldProductVersionSpecUID',
        'oldProductVersionUID'     => 'oldProductVersionUID',
        'productVersionSpecUID'    => 'productVersionSpecUID',
        'productVersionUID'        => 'productVersionUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oldProductVersionSpecUID) {
            $res['oldProductVersionSpecUID'] = $this->oldProductVersionSpecUID;
        }
        if (null !== $this->oldProductVersionUID) {
            $res['oldProductVersionUID'] = $this->oldProductVersionUID;
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
     * @return UpdateEnvironmentProductVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['oldProductVersionSpecUID'])) {
            $model->oldProductVersionSpecUID = $map['oldProductVersionSpecUID'];
        }
        if (isset($map['oldProductVersionUID'])) {
            $model->oldProductVersionUID = $map['oldProductVersionUID'];
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
