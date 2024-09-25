<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceResponseBody\dryRunResult;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceResponseBody\dryRunResult\rolePolicy\missingPolicy;
use AlibabaCloud\Tea\Model;

class rolePolicy extends Model
{
    /**
     * @var missingPolicy[]
     */
    public $missingPolicy;

    /**
     * @var string
     */
    public $policy;
    protected $_name = [
        'missingPolicy' => 'MissingPolicy',
        'policy'        => 'Policy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->missingPolicy) {
            $res['MissingPolicy'] = [];
            if (null !== $this->missingPolicy && \is_array($this->missingPolicy)) {
                $n = 0;
                foreach ($this->missingPolicy as $item) {
                    $res['MissingPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rolePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MissingPolicy'])) {
            if (!empty($map['MissingPolicy'])) {
                $model->missingPolicy = [];
                $n                    = 0;
                foreach ($map['MissingPolicy'] as $item) {
                    $model->missingPolicy[$n++] = null !== $item ? missingPolicy::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}
