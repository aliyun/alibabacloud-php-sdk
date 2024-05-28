<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models;

use AlibabaCloud\Tea\Model;

class ListUninstallDetailRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 62c792d188ccdf4b7ec1aa38
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description This parameter is required.
     *
     * @example 20231120
     *
     * @var string
     */
    public $endDs;

    /**
     * @description This parameter is required.
     *
     * @example 20231120
     *
     * @var string
     */
    public $startDs;
    protected $_name = [
        'dataSourceId' => 'dataSourceId',
        'endDs'        => 'endDs',
        'startDs'      => 'startDs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->endDs) {
            $res['endDs'] = $this->endDs;
        }
        if (null !== $this->startDs) {
            $res['startDs'] = $this->startDs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUninstallDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }
        if (isset($map['endDs'])) {
            $model->endDs = $map['endDs'];
        }
        if (isset($map['startDs'])) {
            $model->startDs = $map['startDs'];
        }

        return $model;
    }
}
