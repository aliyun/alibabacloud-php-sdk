<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHubClustersRequest extends Model
{
    /**
     * @var string
     */
    public $profile;
    protected $_name = [
        'profile' => 'Profile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHubClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        return $model;
    }
}
