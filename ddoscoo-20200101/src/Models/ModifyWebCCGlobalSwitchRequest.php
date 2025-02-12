<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifyWebCCGlobalSwitchRequest extends Model
{
    /**
     * @var string
     */
    public $ccGlobalSwitch;
    /**
     * @var string
     */
    public $domain;
    protected $_name = [
        'ccGlobalSwitch' => 'CcGlobalSwitch',
        'domain'         => 'Domain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ccGlobalSwitch) {
            $res['CcGlobalSwitch'] = $this->ccGlobalSwitch;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (isset($map['CcGlobalSwitch'])) {
            $model->ccGlobalSwitch = $map['CcGlobalSwitch'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
