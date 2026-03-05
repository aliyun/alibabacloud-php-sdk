<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppRecommendedCommoditiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppRecommendedCommoditiesResponseBody\module\commodities;

class module extends Model
{
    /**
     * @var commodities[]
     */
    public $commodities;
    protected $_name = [
        'commodities' => 'Commodities',
    ];

    public function validate()
    {
        if (\is_array($this->commodities)) {
            Model::validateArray($this->commodities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodities) {
            if (\is_array($this->commodities)) {
                $res['Commodities'] = [];
                $n1 = 0;
                foreach ($this->commodities as $item1) {
                    $res['Commodities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commodities'])) {
            if (!empty($map['Commodities'])) {
                $model->commodities = [];
                $n1 = 0;
                foreach ($map['Commodities'] as $item1) {
                    $model->commodities[$n1] = commodities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
