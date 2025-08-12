<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMappingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMappingResponseBody\liveDomainModels\liveDomainModel;

class liveDomainModels extends Model
{
    /**
     * @var liveDomainModel[]
     */
    public $liveDomainModel;
    protected $_name = [
        'liveDomainModel' => 'LiveDomainModel',
    ];

    public function validate()
    {
        if (\is_array($this->liveDomainModel)) {
            Model::validateArray($this->liveDomainModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveDomainModel) {
            if (\is_array($this->liveDomainModel)) {
                $res['LiveDomainModel'] = [];
                $n1 = 0;
                foreach ($this->liveDomainModel as $item1) {
                    $res['LiveDomainModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveDomainModel'])) {
            if (!empty($map['LiveDomainModel'])) {
                $model->liveDomainModel = [];
                $n1 = 0;
                foreach ($map['LiveDomainModel'] as $item1) {
                    $model->liveDomainModel[$n1] = liveDomainModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
