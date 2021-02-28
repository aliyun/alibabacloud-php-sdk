<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainIspDataResponseBody;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainIspDataResponseBody\value\ISPProportionData;
use AlibabaCloud\Tea\Model;

class value extends Model
{
    /**
     * @var ISPProportionData[]
     */
    public $ISPProportionData;
    protected $_name = [
        'ISPProportionData' => 'ISPProportionData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ISPProportionData) {
            $res['ISPProportionData'] = [];
            if (null !== $this->ISPProportionData && \is_array($this->ISPProportionData)) {
                $n = 0;
                foreach ($this->ISPProportionData as $item) {
                    $res['ISPProportionData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return value
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ISPProportionData'])) {
            if (!empty($map['ISPProportionData'])) {
                $model->ISPProportionData = [];
                $n                        = 0;
                foreach ($map['ISPProportionData'] as $item) {
                    $model->ISPProportionData[$n++] = null !== $item ? ISPProportionData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
