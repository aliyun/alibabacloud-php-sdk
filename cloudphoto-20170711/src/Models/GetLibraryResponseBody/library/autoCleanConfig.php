<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetLibraryResponseBody\library;

use AlibabaCloud\Tea\Model;

class autoCleanConfig extends Model
{
    /**
     * @var int
     */
    public $autoCleanDays;

    /**
     * @var bool
     */
    public $autoCleanEnabled;
    protected $_name = [
        'autoCleanDays'    => 'AutoCleanDays',
        'autoCleanEnabled' => 'AutoCleanEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCleanDays) {
            $res['AutoCleanDays'] = $this->autoCleanDays;
        }
        if (null !== $this->autoCleanEnabled) {
            $res['AutoCleanEnabled'] = $this->autoCleanEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoCleanConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCleanDays'])) {
            $model->autoCleanDays = $map['AutoCleanDays'];
        }
        if (isset($map['AutoCleanEnabled'])) {
            $model->autoCleanEnabled = $map['AutoCleanEnabled'];
        }

        return $model;
    }
}
