<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponseBody\domains\pageData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponseBody\domains\pageData\sources\source;

class sources extends Model
{
    /**
     * @var source[]
     */
    public $source;
    protected $_name = [
        'source' => 'Source',
    ];

    public function validate()
    {
        if (\is_array($this->source)) {
            Model::validateArray($this->source);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->source) {
            if (\is_array($this->source)) {
                $res['Source'] = [];
                $n1 = 0;
                foreach ($this->source as $item1) {
                    $res['Source'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Source'])) {
            if (!empty($map['Source'])) {
                $model->source = [];
                $n1 = 0;
                foreach ($map['Source'] as $item1) {
                    $model->source[$n1++] = source::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
