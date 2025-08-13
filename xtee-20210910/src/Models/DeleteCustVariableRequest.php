<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DeleteCustVariableRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var int
     */
    public $dataVersion;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $variableId;
    protected $_name = [
        'lang' => 'Lang',
        'createType' => 'createType',
        'dataVersion' => 'dataVersion',
        'regId' => 'regId',
        'variableId' => 'variableId',
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

        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
        }

        if (null !== $this->dataVersion) {
            $res['dataVersion'] = $this->dataVersion;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->variableId) {
            $res['variableId'] = $this->variableId;
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

        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
        }

        if (isset($map['dataVersion'])) {
            $model->dataVersion = $map['dataVersion'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['variableId'])) {
            $model->variableId = $map['variableId'];
        }

        return $model;
    }
}
