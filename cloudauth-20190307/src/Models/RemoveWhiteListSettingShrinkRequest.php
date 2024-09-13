<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class RemoveWhiteListSettingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $idsShrink;

    /**
     * @example antcloudauth
     *
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'idsShrink'   => 'Ids',
        'serviceCode' => 'ServiceCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveWhiteListSettingShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->idsShrink = $map['Ids'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        return $model;
    }
}
