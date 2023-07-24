<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafScenesResponseBody\defenseScenes;
use AlibabaCloud\Tea\Model;

class DescribeDcdnWafScenesResponseBody extends Model
{
    /**
     * @description The types of the protection policies.
     *
     * @var defenseScenes[]
     */
    public $defenseScenes;

    /**
     * @description The ID of the request.
     *
     * @example 3D7BB13C-DD84-5654-A835-B8E1385DE274
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'defenseScenes' => 'DefenseScenes',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseScenes) {
            $res['DefenseScenes'] = [];
            if (null !== $this->defenseScenes && \is_array($this->defenseScenes)) {
                $n = 0;
                foreach ($this->defenseScenes as $item) {
                    $res['DefenseScenes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafScenesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScenes'])) {
            if (!empty($map['DefenseScenes'])) {
                $model->defenseScenes = [];
                $n                    = 0;
                foreach ($map['DefenseScenes'] as $item) {
                    $model->defenseScenes[$n++] = null !== $item ? defenseScenes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
