<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserVipsByDomainResponseBody;

use AlibabaCloud\Tea\Model;

class vips extends Model
{
    /**
     * @var string[]
     */
    public $vip;
    protected $_name = [
        'vip' => 'Vip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Vip'])) {
            if (!empty($map['Vip'])) {
                $model->vip = $map['Vip'];
            }
        }

        return $model;
    }
}
