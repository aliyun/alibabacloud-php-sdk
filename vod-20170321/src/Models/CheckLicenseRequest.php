<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class CheckLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $nonce;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'businessType' => 'BusinessType',
        'filter' => 'Filter',
        'nonce' => 'Nonce',
        'sign' => 'Sign',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->nonce) {
            $res['Nonce'] = $this->nonce;
        }

        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['Nonce'])) {
            $model->nonce = $map['Nonce'];
        }

        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
