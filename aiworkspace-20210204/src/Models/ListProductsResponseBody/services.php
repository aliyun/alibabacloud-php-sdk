<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsResponseBody;

use AlibabaCloud\Dara\Model;

class services extends Model
{
    /**
     * @var bool
     */
    public $isOpen;
    /**
     * @var string
     */
    public $openUrl;
    /**
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'isOpen'      => 'IsOpen',
        'openUrl'     => 'OpenUrl',
        'serviceCode' => 'ServiceCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isOpen) {
            $res['IsOpen'] = $this->isOpen;
        }

        if (null !== $this->openUrl) {
            $res['OpenUrl'] = $this->openUrl;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
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
        if (isset($map['IsOpen'])) {
            $model->isOpen = $map['IsOpen'];
        }

        if (isset($map['OpenUrl'])) {
            $model->openUrl = $map['OpenUrl'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        return $model;
    }
}
