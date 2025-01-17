<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyVulWhitelistTargetRequest extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $reason;
    /**
     * @var string
     */
    public $sourceIp;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
