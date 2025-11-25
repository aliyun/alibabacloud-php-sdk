<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateResolverEndpointRequest\ipConfig;

class UpdateResolverEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var ipConfig[]
     */
    public $ipConfig;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'ipConfig' => 'IpConfig',
        'lang' => 'Lang',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->ipConfig)) {
            Model::validateArray($this->ipConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->ipConfig) {
            if (\is_array($this->ipConfig)) {
                $res['IpConfig'] = [];
                $n1 = 0;
                foreach ($this->ipConfig as $item1) {
                    $res['IpConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['IpConfig'])) {
            if (!empty($map['IpConfig'])) {
                $model->ipConfig = [];
                $n1 = 0;
                foreach ($map['IpConfig'] as $item1) {
                    $model->ipConfig[$n1] = ipConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
