<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->selectedIpv6Line)) {
            Model::validateArray($this->selectedIpv6Line);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->selectedIpv6Line) {
            if (\is_array($this->selectedIpv6Line)) {
                $res['SelectedIpv6Line'] = [];
                $n1 = 0;
                foreach ($this->selectedIpv6Line as $item1) {
                    $res['SelectedIpv6Line'][$n1++] = $item1;
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
        if (isset($map['SelectedIpv6Line'])) {
            if (!empty($map['SelectedIpv6Line'])) {
                $model->selectedIpv6Line = [];
                $n1 = 0;
                foreach ($map['SelectedIpv6Line'] as $item1) {
                    $model->selectedIpv6Line[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
