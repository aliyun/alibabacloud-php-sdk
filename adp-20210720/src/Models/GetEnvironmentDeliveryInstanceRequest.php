<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class GetEnvironmentDeliveryInstanceRequest extends Model
{
    /**
     * @example 45e95854-0562-4678-a526-93106a24df1b
     *
     * @var string
     */
    public $clusterUID;

    /**
     * @example c1bb74cb-c549-4b70-8f92-187b3015d309
     *
     * @var string
     */
    public $envUID;
    protected $_name = [
        'clusterUID' => 'clusterUID',
        'envUID'     => 'envUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterUID) {
            $res['clusterUID'] = $this->clusterUID;
        }
        if (null !== $this->envUID) {
            $res['envUID'] = $this->envUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEnvironmentDeliveryInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterUID'])) {
            $model->clusterUID = $map['clusterUID'];
        }
        if (isset($map['envUID'])) {
            $model->envUID = $map['envUID'];
        }

        return $model;
    }
}
