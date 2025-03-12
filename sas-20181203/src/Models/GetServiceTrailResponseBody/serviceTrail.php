<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetServiceTrailResponseBody;

use AlibabaCloud\Tea\Model;

class serviceTrail extends Model
{
    /**
     * @description The status of the service trail. Valid values:
     *
     *   **on:**
     *   **off:**
     *
     * @example on
     *
     * @var string
     */
    public $config;

    /**
     * @description The timestamp generated when the service trail was created. Unit: milliseconds.
     *
     * @example 1687250241000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The timestamp generated when the service trail was last updated. Unit: milliseconds.
     *
     * @example 1687250241000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'config'     => 'Config',
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceTrail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
