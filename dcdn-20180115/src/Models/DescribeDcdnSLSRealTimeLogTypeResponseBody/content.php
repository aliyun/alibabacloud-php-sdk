<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealTimeLogTypeResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealTimeLogTypeResponseBody\content\business;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->business) {
            $res['Business'] = [];
            if (null !== $this->business && \is_array($this->business)) {
                $n = 0;
                foreach ($this->business as $item) {
                    $res['Business'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Business'])) {
            if (!empty($map['Business'])) {
                $model->business = [];
                $n               = 0;
                foreach ($map['Business'] as $item) {
                    $model->business[$n++] = null !== $item ? business::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
