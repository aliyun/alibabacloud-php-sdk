<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody;

use AlibabaCloud\Tea\Model;

class relatedCustinsInfo extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\relatedCustinsInfo\relatedCustinsInfo[]
     */
    public $relatedCustinsInfo;
    protected $_name = [
        'relatedCustinsInfo' => 'RelatedCustinsInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relatedCustinsInfo) {
            $res['RelatedCustinsInfo'] = [];
            if (null !== $this->relatedCustinsInfo && \is_array($this->relatedCustinsInfo)) {
                $n = 0;
                foreach ($this->relatedCustinsInfo as $item) {
                    $res['RelatedCustinsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedCustinsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelatedCustinsInfo'])) {
            if (!empty($map['RelatedCustinsInfo'])) {
                $model->relatedCustinsInfo = [];
                $n                         = 0;
                foreach ($map['RelatedCustinsInfo'] as $item) {
                    $model->relatedCustinsInfo[$n++] = null !== $item ? \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\relatedCustinsInfo\relatedCustinsInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
