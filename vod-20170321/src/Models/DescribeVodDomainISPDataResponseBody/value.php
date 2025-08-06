<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainISPDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainISPDataResponseBody\value\ISPProportionData;

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
        if (\is_array($this->ISPProportionData)) {
            Model::validateArray($this->ISPProportionData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ISPProportionData) {
            if (\is_array($this->ISPProportionData)) {
                $res['ISPProportionData'] = [];
                $n1 = 0;
                foreach ($this->ISPProportionData as $item1) {
                    $res['ISPProportionData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ISPProportionData'])) {
            if (!empty($map['ISPProportionData'])) {
                $model->ISPProportionData = [];
                $n1 = 0;
                foreach ($map['ISPProportionData'] as $item1) {
                    $model->ISPProportionData[$n1] = ISPProportionData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
