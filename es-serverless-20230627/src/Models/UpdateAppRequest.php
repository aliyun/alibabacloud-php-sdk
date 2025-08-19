<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\authentication;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\limiterInfo;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\network;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\privateNetwork;

class UpdateAppRequest extends Model
{
    /**
     * @var string
     */
    public $applyReason;

    /**
     * @var authentication
     */
    public $authentication;

    /**
     * @var string
     */
    public $contactInfo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var limiterInfo
     */
    public $limiterInfo;

    /**
     * @var network[]
     */
    public $network;

    /**
     * @var privateNetwork[]
     */
    public $privateNetwork;
    protected $_name = [
        'applyReason' => 'applyReason',
        'authentication' => 'authentication',
        'contactInfo' => 'contactInfo',
        'description' => 'description',
        'limiterInfo' => 'limiterInfo',
        'network' => 'network',
        'privateNetwork' => 'privateNetwork',
    ];

    public function validate()
    {
        if (null !== $this->authentication) {
            $this->authentication->validate();
        }
        if (null !== $this->limiterInfo) {
            $this->limiterInfo->validate();
        }
        if (\is_array($this->network)) {
            Model::validateArray($this->network);
        }
        if (\is_array($this->privateNetwork)) {
            Model::validateArray($this->privateNetwork);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyReason) {
            $res['applyReason'] = $this->applyReason;
        }

        if (null !== $this->authentication) {
            $res['authentication'] = null !== $this->authentication ? $this->authentication->toArray($noStream) : $this->authentication;
        }

        if (null !== $this->contactInfo) {
            $res['contactInfo'] = $this->contactInfo;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->limiterInfo) {
            $res['limiterInfo'] = null !== $this->limiterInfo ? $this->limiterInfo->toArray($noStream) : $this->limiterInfo;
        }

        if (null !== $this->network) {
            if (\is_array($this->network)) {
                $res['network'] = [];
                $n1 = 0;
                foreach ($this->network as $item1) {
                    $res['network'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->privateNetwork) {
            if (\is_array($this->privateNetwork)) {
                $res['privateNetwork'] = [];
                $n1 = 0;
                foreach ($this->privateNetwork as $item1) {
                    $res['privateNetwork'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['applyReason'])) {
            $model->applyReason = $map['applyReason'];
        }

        if (isset($map['authentication'])) {
            $model->authentication = authentication::fromMap($map['authentication']);
        }

        if (isset($map['contactInfo'])) {
            $model->contactInfo = $map['contactInfo'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['limiterInfo'])) {
            $model->limiterInfo = limiterInfo::fromMap($map['limiterInfo']);
        }

        if (isset($map['network'])) {
            if (!empty($map['network'])) {
                $model->network = [];
                $n1 = 0;
                foreach ($map['network'] as $item1) {
                    $model->network[$n1] = network::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['privateNetwork'])) {
            if (!empty($map['privateNetwork'])) {
                $model->privateNetwork = [];
                $n1 = 0;
                foreach ($map['privateNetwork'] as $item1) {
                    $model->privateNetwork[$n1] = privateNetwork::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
