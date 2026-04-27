<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddUnknownThreatDetectProcessRequest;

use AlibabaCloud\Dara\Model;

class processList extends Model
{
    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $processPath;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $sha256;
    protected $_name = [
        'md5' => 'Md5',
        'processPath' => 'ProcessPath',
        'remark' => 'Remark',
        'sha256' => 'Sha256',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->processPath) {
            $res['ProcessPath'] = $this->processPath;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sha256) {
            $res['Sha256'] = $this->sha256;
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
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['ProcessPath'])) {
            $model->processPath = $map['ProcessPath'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Sha256'])) {
            $model->sha256 = $map['Sha256'];
        }

        return $model;
    }
}
