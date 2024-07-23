<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\Tea\Model;

class enhancedNetwork extends Model
{
    /**
     * @description This parameter is unavailable for public use.
     *
     * @var bool
     */
    public $sriovSupport;

    /**
     * @description This parameter is unavailable for public use.
     *
     * @var int
     */
    public $vfQueueNumberPerEni;
    protected $_name = [
        'sriovSupport'        => 'SriovSupport',
        'vfQueueNumberPerEni' => 'VfQueueNumberPerEni',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sriovSupport) {
            $res['SriovSupport'] = $this->sriovSupport;
        }
        if (null !== $this->vfQueueNumberPerEni) {
            $res['VfQueueNumberPerEni'] = $this->vfQueueNumberPerEni;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enhancedNetwork
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SriovSupport'])) {
            $model->sriovSupport = $map['SriovSupport'];
        }
        if (isset($map['VfQueueNumberPerEni'])) {
            $model->vfQueueNumberPerEni = $map['VfQueueNumberPerEni'];
        }

        return $model;
    }
}
