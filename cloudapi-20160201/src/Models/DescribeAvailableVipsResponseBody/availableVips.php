<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAvailableVipsResponseBody;

use AlibabaCloud\Tea\Model;

class availableVips extends Model
{
    /**
     * @var string[]
     */
    public $availableVip;
    protected $_name = [
        'availableVip' => 'AvailableVip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableVip) {
            $res['AvailableVip'] = $this->availableVip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableVips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableVip'])) {
            if (!empty($map['AvailableVip'])) {
                $model->availableVip = $map['AvailableVip'];
            }
        }

        return $model;
    }
}
