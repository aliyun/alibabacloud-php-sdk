<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonReleaseResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonReleaseResponseBody\data\release;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Config of the Release.
     *
     * @example {"host":"mysql-service.default","port":3306,"username":"root","password":"roots"}
     *
     * @var string
     */
    public $config;

    /**
     * @description Release Detail.
     *
     * @var release
     */
    public $release;
    protected $_name = [
        'config'  => 'Config',
        'release' => 'Release',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->release) {
            $res['Release'] = null !== $this->release ? $this->release->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Release'])) {
            $model->release = release::fromMap($map['Release']);
        }

        return $model;
    }
}
