<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnTypesResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnTypesResponseBody\cdnTypes\cdnType;
use AlibabaCloud\Tea\Model;

class cdnTypes extends Model
{
    /**
     * @var cdnType[]
     */
    public $cdnType;
    protected $_name = [
        'cdnType' => 'CdnType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnType) {
            $res['CdnType'] = [];
            if (null !== $this->cdnType && \is_array($this->cdnType)) {
                $n = 0;
                foreach ($this->cdnType as $item) {
                    $res['CdnType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cdnTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnType'])) {
            if (!empty($map['CdnType'])) {
                $model->cdnType = [];
                $n = 0;
                foreach ($map['CdnType'] as $item) {
                    $model->cdnType[$n++] = null !== $item ? cdnType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
