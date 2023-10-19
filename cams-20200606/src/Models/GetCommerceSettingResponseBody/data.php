<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetCommerceSettingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $cartEnable;

    /**
     * @example false
     *
     * @var bool
     */
    public $catalogVisible;
    protected $_name = [
        'cartEnable'     => 'CartEnable',
        'catalogVisible' => 'CatalogVisible',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cartEnable) {
            $res['CartEnable'] = $this->cartEnable;
        }
        if (null !== $this->catalogVisible) {
            $res['CatalogVisible'] = $this->catalogVisible;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CartEnable'])) {
            $model->cartEnable = $map['CartEnable'];
        }
        if (isset($map['CatalogVisible'])) {
            $model->catalogVisible = $map['CatalogVisible'];
        }

        return $model;
    }
}
