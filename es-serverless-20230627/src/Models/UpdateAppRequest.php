<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\authentication;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\network;
use AlibabaCloud\Tea\Model;

class UpdateAppRequest extends Model
{
    /**
     * @var authentication
     */
    public $authentication;

    /**
     * @description 应用备注
     *
     * @var string
     */
    public $description;

    /**
     * @var network[]
     */
    public $network;
    protected $_name = [
        'authentication' => 'authentication',
        'description'    => 'description',
        'network'        => 'network',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authentication) {
            $res['authentication'] = null !== $this->authentication ? $this->authentication->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['authentication'])) {
            $model->authentication = authentication::fromMap($map['authentication']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        return $model;
    }
}
