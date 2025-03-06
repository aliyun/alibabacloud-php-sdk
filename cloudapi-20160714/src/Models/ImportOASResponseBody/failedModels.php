<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\failedModels\failedModel;
use AlibabaCloud\Tea\Model;

class failedModels extends Model
{
    /**
     * @var failedModel[]
     */
    public $failedModel;
    protected $_name = [
        'failedModel' => 'FailedModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedModel) {
            $res['FailedModel'] = [];
            if (null !== $this->failedModel && \is_array($this->failedModel)) {
                $n = 0;
                foreach ($this->failedModel as $item) {
                    $res['FailedModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedModel'])) {
            if (!empty($map['FailedModel'])) {
                $model->failedModel = [];
                $n                  = 0;
                foreach ($map['FailedModel'] as $item) {
                    $model->failedModel[$n++] = null !== $item ? failedModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
