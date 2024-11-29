<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class sitePause extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $paused;
    protected $_name = [
        'configId' => 'ConfigId',
        'paused'   => 'Paused',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->paused) {
            $res['Paused'] = $this->paused;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sitePause
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Paused'])) {
            $model->paused = $map['Paused'];
        }

        return $model;
    }
}
