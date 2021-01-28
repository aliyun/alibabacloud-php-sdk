<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnStagingIpResponseBody;

use AlibabaCloud\Tea\Model;

class IPV4s extends Model
{
    /**
     * @var string[]
     */
    public $IPV4;
    protected $_name = [
        'IPV4' => 'IPV4',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPV4) {
            $res['IPV4'] = $this->IPV4;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IPV4s
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPV4'])) {
            if (!empty($map['IPV4'])) {
                $model->IPV4 = $map['IPV4'];
            }
        }

        return $model;
    }
}
