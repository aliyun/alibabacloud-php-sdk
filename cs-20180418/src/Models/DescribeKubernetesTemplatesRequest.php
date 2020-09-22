<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20180418\Models;

use AlibabaCloud\Tea\Model;

class DescribeKubernetesTemplatesRequest extends Model
{
    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var DescribeKubernetesTemplatesQuery
     */
    public $query;
    protected $_name = [
        'headers' => 'headers',
        'query'   => 'query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }
        if (null !== $this->query) {
            $res['query'] = null !== $this->query ? $this->query->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKubernetesTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }
        if (isset($map['query'])) {
            $model->query = DescribeKubernetesTemplatesQuery::fromMap($map['query']);
        }

        return $model;
    }
}
