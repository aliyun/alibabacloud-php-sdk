<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\CheckLoaFillResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckLoaFillResponseBody\data\errorMsgs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $addressFill;

    /**
     * @var string
     */
    public $templateUrl;

    /**
     * @var bool
     */
    public $countryFill;

    /**
     * @var bool
     */
    public $nationalityFill;

    /**
     * @var bool
     */
    public $stampFill;

    /**
     * @var bool
     */
    public $tradeMarkNameFill;

    /**
     * @var bool
     */
    public $materialNameFill;

    /**
     * @var errorMsgs
     */
    public $errorMsgs;
    protected $_name = [
        'addressFill'       => 'AddressFill',
        'templateUrl'       => 'TemplateUrl',
        'countryFill'       => 'CountryFill',
        'nationalityFill'   => 'NationalityFill',
        'stampFill'         => 'StampFill',
        'tradeMarkNameFill' => 'TradeMarkNameFill',
        'materialNameFill'  => 'MaterialNameFill',
        'errorMsgs'         => 'ErrorMsgs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressFill) {
            $res['AddressFill'] = $this->addressFill;
        }
        if (null !== $this->templateUrl) {
            $res['TemplateUrl'] = $this->templateUrl;
        }
        if (null !== $this->countryFill) {
            $res['CountryFill'] = $this->countryFill;
        }
        if (null !== $this->nationalityFill) {
            $res['NationalityFill'] = $this->nationalityFill;
        }
        if (null !== $this->stampFill) {
            $res['StampFill'] = $this->stampFill;
        }
        if (null !== $this->tradeMarkNameFill) {
            $res['TradeMarkNameFill'] = $this->tradeMarkNameFill;
        }
        if (null !== $this->materialNameFill) {
            $res['MaterialNameFill'] = $this->materialNameFill;
        }
        if (null !== $this->errorMsgs) {
            $res['ErrorMsgs'] = null !== $this->errorMsgs ? $this->errorMsgs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressFill'])) {
            $model->addressFill = $map['AddressFill'];
        }
        if (isset($map['TemplateUrl'])) {
            $model->templateUrl = $map['TemplateUrl'];
        }
        if (isset($map['CountryFill'])) {
            $model->countryFill = $map['CountryFill'];
        }
        if (isset($map['NationalityFill'])) {
            $model->nationalityFill = $map['NationalityFill'];
        }
        if (isset($map['StampFill'])) {
            $model->stampFill = $map['StampFill'];
        }
        if (isset($map['TradeMarkNameFill'])) {
            $model->tradeMarkNameFill = $map['TradeMarkNameFill'];
        }
        if (isset($map['MaterialNameFill'])) {
            $model->materialNameFill = $map['MaterialNameFill'];
        }
        if (isset($map['ErrorMsgs'])) {
            $model->errorMsgs = errorMsgs::fromMap($map['ErrorMsgs']);
        }

        return $model;
    }
}
