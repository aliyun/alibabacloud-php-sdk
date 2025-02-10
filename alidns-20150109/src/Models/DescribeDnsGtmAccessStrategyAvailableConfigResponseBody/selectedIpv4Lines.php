<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->selectedIpv4Line)) {
            Model::validateArray($this->selectedIpv4Line);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->selectedIpv4Line) {
            if (\is_array($this->selectedIpv4Line)) {
                $res['SelectedIpv4Line'] = [];
                $n1                      = 0;
                foreach ($this->selectedIpv4Line as $item1) {
                    $res['SelectedIpv4Line'][$n1++] = $item1;
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
        if (isset($map['SelectedIpv4Line'])) {
            if (!empty($map['SelectedIpv4Line'])) {
                $model->selectedIpv4Line = [];
                $n1                      = 0;
                foreach ($map['SelectedIpv4Line'] as $item1) {
                    $model->selectedIpv4Line[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
