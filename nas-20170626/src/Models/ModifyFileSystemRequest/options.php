<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemRequest;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @description Specifies whether to enable the oplock feature. Valid values:
     *
     *   true: enables the feature.
     *   false: disables the feature.
     *
     * >  Only Server Message Block (SMB) file systems support this feature.
     * @example true
     *
     * @var bool
     */
    public $enableOplock;
    protected $_name = [
        'enableOplock' => 'EnableOplock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableOplock) {
            $res['EnableOplock'] = $this->enableOplock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableOplock'])) {
            $model->enableOplock = $map['EnableOplock'];
        }

        return $model;
    }
}
