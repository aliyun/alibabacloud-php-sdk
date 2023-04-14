<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DeleteFilteringAlgorithmResponseBody\result\meta;

use AlibabaCloud\Tea\Model;

class extInfo extends Model
{
    /**
     * @description xxx
     *
     * @example xxx
     *
     * @var string
     */
    public $itemSeparator;

    /**
     * @description xxx
     *
     * @example xxx
     *
     * @var string
     */
    public $kvSeparator;
    protected $_name = [
        'itemSeparator' => 'itemSeparator',
        'kvSeparator'   => 'kvSeparator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemSeparator) {
            $res['itemSeparator'] = $this->itemSeparator;
        }
        if (null !== $this->kvSeparator) {
            $res['kvSeparator'] = $this->kvSeparator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['itemSeparator'])) {
            $model->itemSeparator = $map['itemSeparator'];
        }
        if (isset($map['kvSeparator'])) {
            $model->kvSeparator = $map['kvSeparator'];
        }

        return $model;
    }
}
