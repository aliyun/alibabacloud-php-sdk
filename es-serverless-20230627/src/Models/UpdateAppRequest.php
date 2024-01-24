<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\authentication;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\limiterInfo;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\network;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\privateNetwork;
use AlibabaCloud\Tea\Model;

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
     * @description 应用备注
     *
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
        'applyReason'    => 'applyReason',
        'authentication' => 'authentication',
        'contactInfo'    => 'contactInfo',
        'description'    => 'description',
        'limiterInfo'    => 'limiterInfo',
        'network'        => 'network',
        'privateNetwork' => 'privateNetwork',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyReason) {
            $res['applyReason'] = $this->applyReason;
        }
        if (null !== $this->authentication) {
            $res['authentication'] = null !== $this->authentication ? $this->authentication->toMap() : null;
        }
        if (null !== $this->contactInfo) {
            $res['contactInfo'] = $this->contactInfo;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->limiterInfo) {
            $res['limiterInfo'] = null !== $this->limiterInfo ? $this->limiterInfo->toMap() : null;
        }
        if (null !== $this->network) {
            $res['network'] = [];
            if (null !== $this->network && \is_array($this->network)) {
                $n = 0;
                foreach ($this->network as $item) {
                    $res['network'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->privateNetwork) {
            $res['privateNetwork'] = [];
            if (null !== $this->privateNetwork && \is_array($this->privateNetwork)) {
                $n = 0;
                foreach ($this->privateNetwork as $item) {
                    $res['privateNetwork'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppRequest
     */
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
                $n              = 0;
                foreach ($map['network'] as $item) {
                    $model->network[$n++] = null !== $item ? network::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['privateNetwork'])) {
            if (!empty($map['privateNetwork'])) {
                $model->privateNetwork = [];
                $n                     = 0;
                foreach ($map['privateNetwork'] as $item) {
                    $model->privateNetwork[$n++] = null !== $item ? privateNetwork::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
