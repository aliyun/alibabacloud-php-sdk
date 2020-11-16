<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMappingResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMappingResponse\liveDomainModels\liveDomainModel;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('liveDomainModel', $this->liveDomainModel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveDomainModel) {
            $res['LiveDomainModel'] = [];
            if (null !== $this->liveDomainModel && \is_array($this->liveDomainModel)) {
                $n = 0;
                foreach ($this->liveDomainModel as $item) {
                    $res['LiveDomainModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveDomainModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveDomainModel'])) {
            if (!empty($map['LiveDomainModel'])) {
                $model->liveDomainModel = [];
                $n                      = 0;
                foreach ($map['LiveDomainModel'] as $item) {
                    $model->liveDomainModel[$n++] = null !== $item ? liveDomainModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
