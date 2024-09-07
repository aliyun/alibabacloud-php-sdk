<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\addons;

use AlibabaCloud\Tea\Model;

class resourcesSpec extends Model
{
    /**
     * @example i-bp1bg85d2q6laic8****
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @example eip-bp1vi9124tbx1g3kr****
     *
     * @var string
     */
    public $eipInstanceId;
    protected $_name = [
        'ecsInstanceId' => 'EcsInstanceId',
        'eipInstanceId' => 'EipInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->eipInstanceId) {
            $res['EipInstanceId'] = $this->eipInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcesSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }

        return $model;
    }
}
