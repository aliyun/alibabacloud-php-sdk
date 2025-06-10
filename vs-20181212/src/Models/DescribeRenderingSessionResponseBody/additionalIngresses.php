<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody\additionalIngresses\portMappings;

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

    public function validate()
    {
        if (\is_array($this->portMappings)) {
            Model::validateArray($this->portMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->portMappings) {
            if (\is_array($this->portMappings)) {
                $res['PortMappings'] = [];
                $n1 = 0;
                foreach ($this->portMappings as $item1) {
                    $res['PortMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['PortMappings'])) {
            if (!empty($map['PortMappings'])) {
                $model->portMappings = [];
                $n1 = 0;
                foreach ($map['PortMappings'] as $item1) {
                    $model->portMappings[$n1++] = portMappings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
