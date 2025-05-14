<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDataNetworkListResponseBody\items\networks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDataNetworkListResponseBody\items\networks\networkTopology\destinations;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDataNetworkListResponseBody\items\networks\networkTopology\sources;

class networkTopology extends Model
{
    /**
     * @var destinations[]
     */
    public $destinations;

    /**
     * @var sources[]
     */
    public $sources;
    protected $_name = [
        'destinations' => 'Destinations',
        'sources' => 'Sources',
    ];

    public function validate()
    {
        if (\is_array($this->destinations)) {
            Model::validateArray($this->destinations);
        }
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinations) {
            if (\is_array($this->destinations)) {
                $res['Destinations'] = [];
                $n1 = 0;
                foreach ($this->destinations as $item1) {
                    $res['Destinations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sources) {
            if (\is_array($this->sources)) {
                $res['Sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['Sources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Destinations'])) {
            if (!empty($map['Destinations'])) {
                $model->destinations = [];
                $n1 = 0;
                foreach ($map['Destinations'] as $item1) {
                    $model->destinations[$n1++] = destinations::fromMap($item1);
                }
            }
        }

        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n1 = 0;
                foreach ($map['Sources'] as $item1) {
                    $model->sources[$n1++] = sources::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
