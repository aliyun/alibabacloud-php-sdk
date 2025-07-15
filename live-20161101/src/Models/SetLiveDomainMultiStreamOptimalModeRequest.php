<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveDomainMultiStreamOptimalModeRequest extends Model
{
    /**
     * @description The application name.
     *
     * This parameter is required.
     *
     * @example testapp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Specifies whether to enable the auto mode of dual-stream disaster recovery. Valid values:
     *
     *   **on**: enables the auto mode.
     *   **off**: disables the auto mode.
     *
     * This parameter is required.
     *
     * @example on
     *
     * @var string
     */
    public $optimalMode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the live stream.
     *
     * This parameter is required.
     *
     * @example teststream
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'domain' => 'Domain',
        'optimalMode' => 'OptimalMode',
        'ownerId' => 'OwnerId',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->optimalMode) {
            $res['OptimalMode'] = $this->optimalMode;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLiveDomainMultiStreamOptimalModeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['OptimalMode'])) {
            $model->optimalMode = $map['OptimalMode'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
