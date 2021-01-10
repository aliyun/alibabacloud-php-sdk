<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListQueryProcessorNersRequest extends Model
{
    /**
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
     * @return ListQueryProcessorNersRequest
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
