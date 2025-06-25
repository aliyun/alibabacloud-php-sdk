<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyNetworkDomainRequest\proxies;

class ModifyNetworkDomainRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkDomainId;

    /**
     * @var string
     */
    public $networkDomainName;

    /**
     * @var string
     */
    public $networkDomainType;

    /**
     * @var proxies[]
     */
    public $proxies;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment' => 'Comment',
        'instanceId' => 'InstanceId',
        'networkDomainId' => 'NetworkDomainId',
        'networkDomainName' => 'NetworkDomainName',
        'networkDomainType' => 'NetworkDomainType',
        'proxies' => 'Proxies',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->proxies)) {
            Model::validateArray($this->proxies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }

        if (null !== $this->networkDomainName) {
            $res['NetworkDomainName'] = $this->networkDomainName;
        }

        if (null !== $this->networkDomainType) {
            $res['NetworkDomainType'] = $this->networkDomainType;
        }

        if (null !== $this->proxies) {
            if (\is_array($this->proxies)) {
                $res['Proxies'] = [];
                $n1 = 0;
                foreach ($this->proxies as $item1) {
                    $res['Proxies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }

        if (isset($map['NetworkDomainName'])) {
            $model->networkDomainName = $map['NetworkDomainName'];
        }

        if (isset($map['NetworkDomainType'])) {
            $model->networkDomainType = $map['NetworkDomainType'];
        }

        if (isset($map['Proxies'])) {
            if (!empty($map['Proxies'])) {
                $model->proxies = [];
                $n1 = 0;
                foreach ($map['Proxies'] as $item1) {
                    $model->proxies[$n1] = proxies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
