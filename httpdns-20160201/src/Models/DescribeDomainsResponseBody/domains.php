<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\DescribeDomainsResponseBody;

use AlibabaCloud\SDK\Httpdns\V20160201\Models\DescribeDomainsResponseBody\domains\domain;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var domain[]
     */
    public $domain;
    protected $_name = [
        'domain' => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = [];
            if (null !== $this->domain && \is_array($this->domain)) {
                $n = 0;
                foreach ($this->domain as $item) {
                    $res['Domain'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Domain'])) {
            if (!empty($map['Domain'])) {
                $model->domain = [];
                $n             = 0;
                foreach ($map['Domain'] as $item) {
                    $model->domain[$n++] = null !== $item ? domain::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
