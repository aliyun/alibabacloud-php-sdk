<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserDomainsResponseBody\domains\pageData;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserDomainsResponseBody\domains\pageData\sources\source;
use AlibabaCloud\Tea\Model;

class sources extends Model
{
    /**
     * @var source[]
     */
    public $source;
    protected $_name = [
        'source' => 'Source',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = [];
            if (null !== $this->source && \is_array($this->source)) {
                $n = 0;
                foreach ($this->source as $item) {
                    $res['Source'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Source'])) {
            if (!empty($map['Source'])) {
                $model->source = [];
                $n = 0;
                foreach ($map['Source'] as $item) {
                    $model->source[$n++] = null !== $item ? source::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
