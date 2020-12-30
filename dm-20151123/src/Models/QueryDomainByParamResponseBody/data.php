<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryDomainByParamResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\QueryDomainByParamResponseBody\data\domain;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var domain[]
     */
    public $domain;
    protected $_name = [
        'domain' => 'domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = [];
            if (null !== $this->domain && \is_array($this->domain)) {
                $n = 0;
                foreach ($this->domain as $item) {
                    $res['domain'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain'])) {
            if (!empty($map['domain'])) {
                $model->domain = [];
                $n             = 0;
                foreach ($map['domain'] as $item) {
                    $model->domain[$n++] = null !== $item ? domain::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
