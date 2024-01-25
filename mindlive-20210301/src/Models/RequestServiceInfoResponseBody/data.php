<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models\RequestServiceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $serviceEffectAt;

    /**
     * @var int
     */
    public $serviceExpireAt;

    /**
     * @var string
     */
    public $servicePackName;
    protected $_name = [
        'serviceEffectAt' => 'ServiceEffectAt',
        'serviceExpireAt' => 'ServiceExpireAt',
        'servicePackName' => 'ServicePackName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceEffectAt) {
            $res['ServiceEffectAt'] = $this->serviceEffectAt;
        }
        if (null !== $this->serviceExpireAt) {
            $res['ServiceExpireAt'] = $this->serviceExpireAt;
        }
        if (null !== $this->servicePackName) {
            $res['ServicePackName'] = $this->servicePackName;
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
        if (isset($map['ServiceEffectAt'])) {
            $model->serviceEffectAt = $map['ServiceEffectAt'];
        }
        if (isset($map['ServiceExpireAt'])) {
            $model->serviceExpireAt = $map['ServiceExpireAt'];
        }
        if (isset($map['ServicePackName'])) {
            $model->servicePackName = $map['ServicePackName'];
        }

        return $model;
    }
}
