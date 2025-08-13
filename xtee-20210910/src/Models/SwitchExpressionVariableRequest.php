<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class SwitchExpressionVariableRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $dataVersion;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'lang' => 'Lang',
        'dataVersion' => 'dataVersion',
        'id' => 'id',
        'regId' => 'regId',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
