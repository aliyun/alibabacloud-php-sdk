<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DistApplicationDataRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $distStrategy;
    protected $_name = [
        'appId'        => 'AppId',
        'data'         => 'Data',
        'distStrategy' => 'DistStrategy',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('data', $this->data, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->distStrategy) {
            $res['DistStrategy'] = $this->distStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DistApplicationDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DistStrategy'])) {
            $model->distStrategy = $map['DistStrategy'];
        }

        return $model;
    }
}
