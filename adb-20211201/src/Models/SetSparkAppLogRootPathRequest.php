<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SetSparkAppLogRootPathRequest extends Model
{
    /**
     * @description The database ID.
     *
     * @example am-dbclusterid
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The Object Storage Service (OSS) log path.
     *
     * @example oss://path/to/log
     *
     * @var string
     */
    public $ossLogPath;

    /**
     * @description Specifies whether to use the default OSS log path.
     *
     * @example true
     *
     * @var bool
     */
    public $useDefaultOss;
    protected $_name = [
        'DBClusterId'   => 'DBClusterId',
        'ossLogPath'    => 'OssLogPath',
        'useDefaultOss' => 'UseDefaultOss',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->ossLogPath) {
            $res['OssLogPath'] = $this->ossLogPath;
        }
        if (null !== $this->useDefaultOss) {
            $res['UseDefaultOss'] = $this->useDefaultOss;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSparkAppLogRootPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['OssLogPath'])) {
            $model->ossLogPath = $map['OssLogPath'];
        }
        if (isset($map['UseDefaultOss'])) {
            $model->useDefaultOss = $map['UseDefaultOss'];
        }

        return $model;
    }
}
