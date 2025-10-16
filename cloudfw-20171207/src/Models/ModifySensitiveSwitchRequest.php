<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifySensitiveSwitchRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sensitiveCategory;

    /**
     * @var string
     */
    public $switchStatus;
    protected $_name = [
        'lang' => 'Lang',
        'sensitiveCategory' => 'SensitiveCategory',
        'switchStatus' => 'SwitchStatus',
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

        if (null !== $this->sensitiveCategory) {
            $res['SensitiveCategory'] = $this->sensitiveCategory;
        }

        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
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

        if (isset($map['SensitiveCategory'])) {
            $model->sensitiveCategory = $map['SensitiveCategory'];
        }

        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }

        return $model;
    }
}
