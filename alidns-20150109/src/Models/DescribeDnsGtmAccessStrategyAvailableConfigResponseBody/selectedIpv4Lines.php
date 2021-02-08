<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody;

use AlibabaCloud\Tea\Model;

class selectedIpv4Lines extends Model
{
    /**
     * @var string[]
     */
    public $selectedIpv4Line;
    protected $_name = [
        'selectedIpv4Line' => 'SelectedIpv4Line',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectedIpv4Line) {
            $res['SelectedIpv4Line'] = $this->selectedIpv4Line;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return selectedIpv4Lines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectedIpv4Line'])) {
            if (!empty($map['SelectedIpv4Line'])) {
                $model->selectedIpv4Line = $map['SelectedIpv4Line'];
            }
        }

        return $model;
    }
}
