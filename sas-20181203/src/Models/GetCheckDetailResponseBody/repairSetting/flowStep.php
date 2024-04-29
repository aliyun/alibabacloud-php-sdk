<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\repairSetting;

use AlibabaCloud\Tea\Model;

class flowStep extends Model
{
    /**
     * @var string
     */
    public $showText;

    /**
     * @var string
     */
    public $step;
    protected $_name = [
        'showText' => 'ShowText',
        'step'     => 'Step',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->showText) {
            $res['ShowText'] = $this->showText;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowStep
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShowText'])) {
            $model->showText = $map['ShowText'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
