<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class QueryMarketImagesRequest extends Model
{
    /**
     * @var string
     */
    public $param;
    protected $_name = [
        'param' => 'Param',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMarketImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }

        return $model;
    }
}
