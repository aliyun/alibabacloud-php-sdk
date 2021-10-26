<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccordanceApisResponseBody\accordanceApis;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccordanceApisResponseBody\accordanceApis\accordanceApi\source;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccordanceApisResponseBody\accordanceApis\accordanceApi\target;
use AlibabaCloud\Tea\Model;

class accordanceApi extends Model
{
    /**
     * @var source
     */
    public $source;

    /**
     * @var target
     */
    public $target;
    protected $_name = [
        'source' => 'Source',
        'target' => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accordanceApi
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }
        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }

        return $model;
    }
}
