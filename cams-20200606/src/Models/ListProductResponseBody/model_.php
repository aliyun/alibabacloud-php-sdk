<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListProductResponseBody;

use AlibabaCloud\SDK\Cams\V20200606\Models\ListProductResponseBody\model\paging;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @description The returned data.
     *
     * @var mixed[][]
     */
    public $data;

    /**
     * @description The pagination details.
     *
     * @var paging
     */
    public $paging;
    protected $_name = [
        'data' => 'Data',
        'paging' => 'Paging',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->paging) {
            $res['Paging'] = null !== $this->paging ? $this->paging->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = $map['Data'];
            }
        }
        if (isset($map['Paging'])) {
            $model->paging = paging::fromMap($map['Paging']);
        }

        return $model;
    }
}
