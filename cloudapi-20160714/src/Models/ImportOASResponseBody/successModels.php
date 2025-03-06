<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successModels\successModel;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->successModel) {
            $res['SuccessModel'] = [];
            if (null !== $this->successModel && \is_array($this->successModel)) {
                $n = 0;
                foreach ($this->successModel as $item) {
                    $res['SuccessModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuccessModel'])) {
            if (!empty($map['SuccessModel'])) {
                $model->successModel = [];
                $n                   = 0;
                foreach ($map['SuccessModel'] as $item) {
                    $model->successModel[$n++] = null !== $item ? successModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
