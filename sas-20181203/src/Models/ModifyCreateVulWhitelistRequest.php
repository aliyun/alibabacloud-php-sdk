<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyCreateVulWhitelistRequest extends Model
{
    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $targetInfo;

    /**
     * @var string
     */
    public $whitelist;
    protected $_name = [
        'reason'     => 'Reason',
        'targetInfo' => 'TargetInfo',
        'whitelist'  => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = $this->targetInfo;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCreateVulWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['TargetInfo'])) {
            $model->targetInfo = $map['TargetInfo'];
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }

        return $model;
    }
}
