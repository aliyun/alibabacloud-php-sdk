<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\dnsConfig\options;
use AlibabaCloud\Tea\Model;

class dnsConfig extends Model
{
    /**
     * @var string[]
     */
    public $searches;

    /**
     * @var options[]
     */
    public $options;

    /**
     * @var string[]
     */
    public $nameServers;
    protected $_name = [
        'searches'    => 'Searches',
        'options'     => 'Options',
        'nameServers' => 'NameServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searches) {
            $res['Searches'] = $this->searches;
        }
        if (null !== $this->options) {
            $res['Options'] = [];
            if (null !== $this->options && \is_array($this->options)) {
                $n = 0;
                foreach ($this->options as $item) {
                    $res['Options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nameServers) {
            $res['NameServers'] = $this->nameServers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Searches'])) {
            if (!empty($map['Searches'])) {
                $model->searches = $map['Searches'];
            }
        }
        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n              = 0;
                foreach ($map['Options'] as $item) {
                    $model->options[$n++] = null !== $item ? options::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NameServers'])) {
            if (!empty($map['NameServers'])) {
                $model->nameServers = $map['NameServers'];
            }
        }

        return $model;
    }
}
