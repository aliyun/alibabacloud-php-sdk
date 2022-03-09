<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class DeleteQRCodeRequest extends Model
{
    /**
     * @description sId
     *
     * @var string
     */
    public $SId;
    protected $_name = [
        'SId' => 'SId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SId) {
            $res['SId'] = $this->SId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteQRCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SId'])) {
            $model->SId = $map['SId'];
        }

        return $model;
    }
}
