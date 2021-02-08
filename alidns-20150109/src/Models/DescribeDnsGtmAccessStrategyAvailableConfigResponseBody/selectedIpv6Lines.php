<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody;

use AlibabaCloud\Tea\Model;

class selectedIpv6Lines extends Model
{
    /**
     * @var string[]
     */
    public $selectedIpv6Line;
    protected $_name = [
        'selectedIpv6Line' => 'SelectedIpv6Line',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectedIpv6Line) {
            $res['SelectedIpv6Line'] = $this->selectedIpv6Line;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return selectedIpv6Lines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectedIpv6Line'])) {
            if (!empty($map['SelectedIpv6Line'])) {
                $model->selectedIpv6Line = $map['SelectedIpv6Line'];
            }
        }

        return $model;
    }
}
