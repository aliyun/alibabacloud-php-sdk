<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealTimeLogTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealTimeLogTypeResponseBody\content\business;

class content extends Model
{
    /**
     * @var business[]
     */
    public $business;
    protected $_name = [
        'business' => 'Business',
    ];

    public function validate()
    {
        if (\is_array($this->business)) {
            Model::validateArray($this->business);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->business) {
            if (\is_array($this->business)) {
                $res['Business'] = [];
                $n1 = 0;
                foreach ($this->business as $item1) {
                    $res['Business'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Business'])) {
            if (!empty($map['Business'])) {
                $model->business = [];
                $n1 = 0;
                foreach ($map['Business'] as $item1) {
                    $model->business[$n1] = business::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
