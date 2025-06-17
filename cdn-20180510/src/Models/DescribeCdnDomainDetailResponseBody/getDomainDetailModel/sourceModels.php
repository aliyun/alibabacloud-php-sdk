<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel\sourceModels\sourceModel;

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
        if (\is_array($this->sourceModel)) {
            Model::validateArray($this->sourceModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceModel) {
            if (\is_array($this->sourceModel)) {
                $res['SourceModel'] = [];
                $n1 = 0;
                foreach ($this->sourceModel as $item1) {
                    $res['SourceModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['SourceModel'])) {
            if (!empty($map['SourceModel'])) {
                $model->sourceModel = [];
                $n1 = 0;
                foreach ($map['SourceModel'] as $item1) {
                    $model->sourceModel[$n1] = sourceModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
