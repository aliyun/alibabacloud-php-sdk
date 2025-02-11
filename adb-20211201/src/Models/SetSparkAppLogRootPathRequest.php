<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class SetSparkAppLogRootPathRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $ossLogPath;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
