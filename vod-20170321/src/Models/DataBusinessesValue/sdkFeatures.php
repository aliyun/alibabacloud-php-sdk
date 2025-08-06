<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DataBusinessesValue;

use AlibabaCloud\Dara\Model;

class sdkFeatures extends Model
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
    public $scode;

    /**
     * @var string
     */
    public $svalue;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'scode' => 'Scode',
        'svalue' => 'Svalue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->scode) {
            $res['Scode'] = $this->scode;
        }

        if (null !== $this->svalue) {
            $res['Svalue'] = $this->svalue;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Scode'])) {
            $model->scode = $map['Scode'];
        }

        if (isset($map['Svalue'])) {
            $model->svalue = $map['Svalue'];
        }

        return $model;
    }
}
