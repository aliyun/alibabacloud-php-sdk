<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryPhoneNoAByTrackNoResponseBody;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryPhoneNoAByTrackNoResponseBody\module\phoneNoAInfo;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var phoneNoAInfo[]
     */
    public $phoneNoAInfo;
    protected $_name = [
        'phoneNoAInfo' => 'phoneNoAInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNoAInfo) {
            $res['phoneNoAInfo'] = [];
            if (null !== $this->phoneNoAInfo && \is_array($this->phoneNoAInfo)) {
                $n = 0;
                foreach ($this->phoneNoAInfo as $item) {
                    $res['phoneNoAInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['phoneNoAInfo'])) {
            if (!empty($map['phoneNoAInfo'])) {
                $model->phoneNoAInfo = [];
                $n                   = 0;
                foreach ($map['phoneNoAInfo'] as $item) {
                    $model->phoneNoAInfo[$n++] = null !== $item ? phoneNoAInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
