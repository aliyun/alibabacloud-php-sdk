<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\resourceSettings;

use AlibabaCloud\Tea\Model;

class realtimeResourceSettings extends Model
{
    /**
     * @example S_res_group_111_222
     *
     * @var string
     */
    public $resourceGroupIdentifier;
    protected $_name = [
        'resourceGroupIdentifier' => 'ResourceGroupIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupIdentifier) {
            $res['ResourceGroupIdentifier'] = $this->resourceGroupIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realtimeResourceSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupIdentifier'])) {
            $model->resourceGroupIdentifier = $map['ResourceGroupIdentifier'];
        }

        return $model;
    }
}
