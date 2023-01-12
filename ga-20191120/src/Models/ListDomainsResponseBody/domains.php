<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListDomainsResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListDomainsResponseBody\domains\accelerators;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var accelerators[]
     */
    public $accelerators;

    /**
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerators' => 'Accelerators',
        'domain'       => 'Domain',
        'state'        => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerators) {
            $res['Accelerators'] = [];
            if (null !== $this->accelerators && \is_array($this->accelerators)) {
                $n = 0;
                foreach ($this->accelerators as $item) {
                    $res['Accelerators'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accelerators'])) {
            if (!empty($map['Accelerators'])) {
                $model->accelerators = [];
                $n                   = 0;
                foreach ($map['Accelerators'] as $item) {
                    $model->accelerators[$n++] = null !== $item ? accelerators::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
