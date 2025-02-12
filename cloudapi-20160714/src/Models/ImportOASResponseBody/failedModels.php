<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\failedModels\failedModel;

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
        if (\is_array($this->failedModel)) {
            Model::validateArray($this->failedModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedModel) {
            if (\is_array($this->failedModel)) {
                $res['FailedModel'] = [];
                $n1                 = 0;
                foreach ($this->failedModel as $item1) {
                    $res['FailedModel'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailedModel'])) {
            if (!empty($map['FailedModel'])) {
                $model->failedModel = [];
                $n1                 = 0;
                foreach ($map['FailedModel'] as $item1) {
                    $model->failedModel[$n1++] = failedModel::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
