<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel;

use AlibabaCloud\Tea\Model;

class sources extends Model
{
    /**
     * @var string[]
     */
    public $source;
    protected $_name = [
        'source' => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
                $model->source = $map['Source'];
            }
        }

        return $model;
    }
}
