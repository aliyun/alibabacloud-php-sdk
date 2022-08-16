<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CredentialConfig\chain;
use AlibabaCloud\Tea\Model;

class CredentialConfig extends Model
{
    /**
     * @var chain[]
     */
    public $chain;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $serviceRole;
    protected $_name = [
        'chain'       => 'Chain',
        'policy'      => 'Policy',
        'serviceRole' => 'ServiceRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chain) {
            $res['Chain'] = [];
            if (null !== $this->chain && \is_array($this->chain)) {
                $n = 0;
                foreach ($this->chain as $item) {
                    $res['Chain'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->serviceRole) {
            $res['ServiceRole'] = $this->serviceRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CredentialConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Chain'])) {
            if (!empty($map['Chain'])) {
                $model->chain = [];
                $n            = 0;
                foreach ($map['Chain'] as $item) {
                    $model->chain[$n++] = null !== $item ? chain::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['ServiceRole'])) {
            $model->serviceRole = $map['ServiceRole'];
        }

        return $model;
    }
}
