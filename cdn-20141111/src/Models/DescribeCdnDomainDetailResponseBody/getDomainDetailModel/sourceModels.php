<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel;

use AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel\sourceModels\sourceModel;
use AlibabaCloud\Tea\Model;

class sourceModels extends Model
{
    /**
     * @var sourceModel[]
     */
    public $sourceModel;
    protected $_name = [
        'sourceModel' => 'SourceModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceModel) {
            $res['SourceModel'] = [];
            if (null !== $this->sourceModel && \is_array($this->sourceModel)) {
                $n = 0;
                foreach ($this->sourceModel as $item) {
                    $res['SourceModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceModel'])) {
            if (!empty($map['SourceModel'])) {
                $model->sourceModel = [];
                $n                  = 0;
                foreach ($map['SourceModel'] as $item) {
                    $model->sourceModel[$n++] = null !== $item ? sourceModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
