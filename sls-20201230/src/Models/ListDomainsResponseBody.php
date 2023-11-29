<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListDomainsResponseBody extends Model
{
    /**
     * @description The number of domain names that are returned on the current page.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The domain names.
     *
     * @var string[]
     */
    public $domains;

    /**
     * @description The total number of domain names that are returned.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'count'   => 'count',
        'domains' => 'domains',
        'total'   => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->domains) {
            $res['domains'] = $this->domains;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDomainsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['domains'])) {
            if (!empty($map['domains'])) {
                $model->domains = $map['domains'];
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
