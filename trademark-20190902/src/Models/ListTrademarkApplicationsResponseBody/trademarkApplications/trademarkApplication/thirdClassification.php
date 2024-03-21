<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationsResponseBody\trademarkApplications\trademarkApplication;

use AlibabaCloud\Tea\Model;

class thirdClassification extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationsResponseBody\trademarkApplications\trademarkApplication\thirdClassification\thirdClassification[]
     */
    public $thirdClassification;
    protected $_name = [
        'thirdClassification' => 'ThirdClassification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thirdClassification) {
            $res['ThirdClassification'] = [];
            if (null !== $this->thirdClassification && \is_array($this->thirdClassification)) {
                $n = 0;
                foreach ($this->thirdClassification as $item) {
                    $res['ThirdClassification'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return thirdClassification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThirdClassification'])) {
            if (!empty($map['ThirdClassification'])) {
                $model->thirdClassification = [];
                $n                          = 0;
                foreach ($map['ThirdClassification'] as $item) {
                    $model->thirdClassification[$n++] = null !== $item ? \AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationsResponseBody\trademarkApplications\trademarkApplication\thirdClassification\thirdClassification::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
