<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyVulWhitelistTargetRequest extends Model
{
    /**
     * @example 2533681
     *
     * @var int
     */
    public $id;

    /**
     * @example 1221
     *
     * @var string
     */
    public $reason;

    /**
     * @example 42.120.75.150
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example {
     * }
     * @var string
     */
    public $targetInfo;
    protected $_name = [
        'id'         => 'Id',
        'reason'     => 'Reason',
        'sourceIp'   => 'SourceIp',
        'targetInfo' => 'TargetInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = $this->targetInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVulWhitelistTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TargetInfo'])) {
            $model->targetInfo = $map['TargetInfo'];
        }

        return $model;
    }
}
