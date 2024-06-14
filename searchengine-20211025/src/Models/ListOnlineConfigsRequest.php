<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListOnlineConfigsRequest extends Model
{
    /**
     * @description The name of the domain
     *
     * This parameter is required.
     * @example sz_vpc_domain_1
     *
     * @var string
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
            $res['domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOnlineConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        return $model;
    }
}
