<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class hostAliases extends Model
{
    /**
     * @var string[]
     */
    public $hostNames;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'hostNames' => 'HostNames',
        'ip'        => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostNames) {
            $res['HostNames'] = $this->hostNames;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostAliases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostNames'])) {
            if (!empty($map['HostNames'])) {
                $model->hostNames = $map['HostNames'];
            }
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
