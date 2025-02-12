<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successModels\successModel;

class successModels extends Model
{
    /**
     * @var successModel[]
     */
    public $successModel;
    protected $_name = [
        'successModel' => 'SuccessModel',
    ];

    public function validate()
    {
        if (\is_array($this->successModel)) {
            Model::validateArray($this->successModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->successModel) {
            if (\is_array($this->successModel)) {
                $res['SuccessModel'] = [];
                $n1                  = 0;
                foreach ($this->successModel as $item1) {
                    $res['SuccessModel'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SuccessModel'])) {
            if (!empty($map['SuccessModel'])) {
                $model->successModel = [];
                $n1                  = 0;
                foreach ($map['SuccessModel'] as $item1) {
                    $model->successModel[$n1++] = successModel::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
