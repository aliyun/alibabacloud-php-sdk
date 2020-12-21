<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class ValidateVirtualClusterNameRequest extends Model
{
    /**
     * @var string
     */
    public $vcName;
    protected $_name = [
        'vcName' => 'VcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateVirtualClusterNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }

        return $model;
    }
}
