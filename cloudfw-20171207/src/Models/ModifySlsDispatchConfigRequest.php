<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifySlsDispatchConfigRequest extends Model
{
    /**
     * @var string
     */
    public $detailConfig;

    /**
     * @var int
     */
    public $logVersion;

    /**
     * @var string
     */
    public $modifyType;
    protected $_name = [
        'detailConfig' => 'DetailConfig',
        'logVersion' => 'LogVersion',
        'modifyType' => 'ModifyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailConfig) {
            $res['DetailConfig'] = $this->detailConfig;
        }

        if (null !== $this->logVersion) {
            $res['LogVersion'] = $this->logVersion;
        }

        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
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
        if (isset($map['DetailConfig'])) {
            $model->detailConfig = $map['DetailConfig'];
        }

        if (isset($map['LogVersion'])) {
            $model->logVersion = $map['LogVersion'];
        }

        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }

        return $model;
    }
}
