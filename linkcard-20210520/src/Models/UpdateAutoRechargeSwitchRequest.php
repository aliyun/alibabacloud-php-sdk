<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class UpdateAutoRechargeSwitchRequest extends Model
{
    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;

    /**
     * @example true
     *
     * @var bool
     */
    public $open;
    protected $_name = [
        'iccid' => 'Iccid',
        'open'  => 'Open',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAutoRechargeSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }

        return $model;
    }
}
