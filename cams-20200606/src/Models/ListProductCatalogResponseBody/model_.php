<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListProductCatalogResponseBody;

use AlibabaCloud\SDK\Cams\V20200606\Models\ListProductCatalogResponseBody\model\paging;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var mixed[][]
     */
    public $data;

    /**
     * @var paging
     */
    public $paging;
    protected $_name = [
        'data'   => 'Data',
        'paging' => 'Paging',
    ];

    public function validate()
    {
    }

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
