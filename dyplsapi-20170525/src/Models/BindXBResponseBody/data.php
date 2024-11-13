<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindXBResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 工作号关系绑定的唯一标识
     *
     * @example 4353453456
     *
     * @var string
     */
    public $authId;

    /**
     * @description X号码
     *
     * @example 18640577897
     *
     * @var string
     */
    public $telX;
    protected $_name = [
        'authId' => 'AuthId',
        'telX'   => 'TelX',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }
        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
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
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }
        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        return $model;
    }
}
