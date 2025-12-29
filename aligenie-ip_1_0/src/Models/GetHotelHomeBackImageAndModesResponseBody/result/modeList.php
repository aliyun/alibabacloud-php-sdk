<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesResponseBody\result;

use AlibabaCloud\Dara\Model;

class modeList extends Model
{
    /**
     * @var string
     */
    public $cnName;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $icon;
    protected $_name = [
        'cnName' => 'CnName',
        'code' => 'Code',
        'icon' => 'Icon',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnName) {
            $res['CnName'] = $this->cnName;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
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
        if (isset($map['CnName'])) {
            $model->cnName = $map['CnName'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        return $model;
    }
}
