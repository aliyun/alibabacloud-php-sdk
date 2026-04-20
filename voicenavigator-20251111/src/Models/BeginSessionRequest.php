<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;

class BeginSessionRequest extends Model
{
    /**
     * @var bool
     */
    public $draftVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $vendorParams;
    protected $_name = [
        'draftVersion' => 'DraftVersion',
        'instanceId' => 'InstanceId',
        'scriptId' => 'ScriptId',
        'vendorParams' => 'VendorParams',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->draftVersion) {
            $res['DraftVersion'] = $this->draftVersion;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->vendorParams) {
            $res['VendorParams'] = $this->vendorParams;
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
        if (isset($map['DraftVersion'])) {
            $model->draftVersion = $map['DraftVersion'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['VendorParams'])) {
            $model->vendorParams = $map['VendorParams'];
        }

        return $model;
    }
}
