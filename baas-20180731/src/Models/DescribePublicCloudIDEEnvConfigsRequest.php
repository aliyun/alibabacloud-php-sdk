<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribePublicCloudIDEEnvConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;
    protected $_name = [
        'bizid' => 'Bizid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePublicCloudIDEEnvConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }

        return $model;
    }
}
