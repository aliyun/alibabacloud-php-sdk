<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class SwitchExpressionVariableRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $dataVersion;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $regId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'lang'        => 'Lang',
        'dataVersion' => 'dataVersion',
        'id'          => 'id',
        'regId'       => 'regId',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->dataVersion) {
            $res['dataVersion'] = $this->dataVersion;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchExpressionVariableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['dataVersion'])) {
            $model->dataVersion = $map['dataVersion'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
