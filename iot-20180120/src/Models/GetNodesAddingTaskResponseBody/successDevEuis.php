<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetNodesAddingTaskResponseBody;

use AlibabaCloud\Tea\Model;

class successDevEuis extends Model
{
    /**
     * @var string[]
     */
    public $successDevEui;
    protected $_name = [
        'successDevEui' => 'SuccessDevEui',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->successDevEui) {
            $res['SuccessDevEui'] = $this->successDevEui;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successDevEuis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuccessDevEui'])) {
            if (!empty($map['SuccessDevEui'])) {
                $model->successDevEui = $map['SuccessDevEui'];
            }
        }

        return $model;
    }
}
