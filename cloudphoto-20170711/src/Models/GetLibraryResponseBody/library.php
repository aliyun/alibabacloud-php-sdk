<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetLibraryResponseBody;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetLibraryResponseBody\library\autoCleanConfig;
use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetLibraryResponseBody\library\quota;
use AlibabaCloud\Tea\Model;

class library extends Model
{
    /**
     * @var autoCleanConfig
     */
    public $autoCleanConfig;

    /**
     * @var quota
     */
    public $quota;

    /**
     * @var int
     */
    public $ctime;
    protected $_name = [
        'autoCleanConfig' => 'AutoCleanConfig',
        'quota'           => 'Quota',
        'ctime'           => 'Ctime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCleanConfig) {
            $res['AutoCleanConfig'] = null !== $this->autoCleanConfig ? $this->autoCleanConfig->toMap() : null;
        }
        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return library
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCleanConfig'])) {
            $model->autoCleanConfig = autoCleanConfig::fromMap($map['AutoCleanConfig']);
        }
        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }
        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }

        return $model;
    }
}
