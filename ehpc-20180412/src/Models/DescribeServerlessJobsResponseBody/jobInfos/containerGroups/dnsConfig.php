<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\dnsConfig\options;
use AlibabaCloud\Tea\Model;

class dnsConfig extends Model
{
    /**
     * @description The IP addresses of DNS servers.
     *
     * @var string[]
     */
    public $nameServers;

    /**
     * @description The options. Each option is a name-value pair. The value in the name-value pair is optional.
     *
     * @var options[]
     */
    public $options;

    /**
     * @description The search domains of the DNS server.
     *
     * @var string[]
     */
    public $searches;
    protected $_name = [
        'nameServers' => 'NameServers',
        'options'     => 'Options',
        'searches'    => 'Searches',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameServers) {
            $res['NameServers'] = $this->nameServers;
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
        if (null !== $this->searches) {
            $res['Searches'] = $this->searches;
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
        if (isset($map['NameServers'])) {
            if (!empty($map['NameServers'])) {
                $model->nameServers = $map['NameServers'];
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
        if (isset($map['Searches'])) {
            if (!empty($map['Searches'])) {
                $model->searches = $map['Searches'];
            }
        }

        return $model;
    }
}
