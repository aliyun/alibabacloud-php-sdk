<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeStandbyCreateModeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example BACKUP_RESTORE
     *
     * @var string
     */
    public $createMode;
    protected $_name = [
        'createMode' => 'CreateMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createMode) {
            $res['CreateMode'] = $this->createMode;
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
        if (isset($map['CreateMode'])) {
            $model->createMode = $map['CreateMode'];
        }

        return $model;
    }
}
