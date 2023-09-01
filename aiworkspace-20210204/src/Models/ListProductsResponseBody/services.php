<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsResponseBody;

use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isOpen;

    /**
     * @var string
     */
    public $openUrl;

    /**
     * @example oss
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return services
     */
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
