<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\additionalIngresses\portMappings;
use AlibabaCloud\Tea\Model;

class additionalIngresses extends Model
{
    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var portMappings[]
     */
    public $portMappings;
    protected $_name = [
        'hostname' => 'Hostname',
        'isp' => 'Isp',
        'portMappings' => 'PortMappings',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->portMappings) {
            $res['PortMappings'] = [];
            if (null !== $this->portMappings && \is_array($this->portMappings)) {
                $n = 0;
                foreach ($this->portMappings as $item) {
                    $res['PortMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return additionalIngresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['PortMappings'])) {
            if (!empty($map['PortMappings'])) {
                $model->portMappings = [];
                $n = 0;
                foreach ($map['PortMappings'] as $item) {
                    $model->portMappings[$n++] = null !== $item ? portMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
