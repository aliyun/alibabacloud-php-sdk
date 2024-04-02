<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomOcrTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $recognizeArea;

    /**
     * @var string
     */
    public $referArea;
    protected $_name = [
        'id'            => 'Id',
        'name'          => 'Name',
        'recognizeArea' => 'RecognizeArea',
        'referArea'     => 'ReferArea',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recognizeArea) {
            $res['RecognizeArea'] = $this->recognizeArea;
        }
        if (null !== $this->referArea) {
            $res['ReferArea'] = $this->referArea;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomOcrTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecognizeArea'])) {
            $model->recognizeArea = $map['RecognizeArea'];
        }
        if (isset($map['ReferArea'])) {
            $model->referArea = $map['ReferArea'];
        }

        return $model;
    }
}
