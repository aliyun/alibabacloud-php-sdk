<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class OutputCodeLocation extends Model
{
    /**
     * @example https://xyz.oss-cn-shanghai.aliyuncs.com/xxx/xxx/xxx
     *
     * @var string
     */
    public $location;

    /**
     * @example OSS
     *
     * @var string
     */
    public $repositoryType;
    protected $_name = [
        'location'       => 'location',
        'repositoryType' => 'repositoryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->repositoryType) {
            $res['repositoryType'] = $this->repositoryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OutputCodeLocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['repositoryType'])) {
            $model->repositoryType = $map['repositoryType'];
        }

        return $model;
    }
}
