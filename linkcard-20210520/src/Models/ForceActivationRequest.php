<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ForceActivationRequest extends Model
{
    /**
     * @example sameflowcard
     *
     * @var string
     */
    public $dateType;

    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;
    protected $_name = [
        'dateType' => 'DateType',
        'iccid'    => 'Iccid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateType) {
            $res['DateType'] = $this->dateType;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ForceActivationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateType'])) {
            $model->dateType = $map['DateType'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }

        return $model;
    }
}
