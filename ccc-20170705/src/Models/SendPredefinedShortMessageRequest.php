<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class SendPredefinedShortMessageRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $phoneNumbers;

    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $templateParam;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'phoneNumbers'  => 'PhoneNumbers',
        'configId'      => 'ConfigId',
        'templateParam' => 'TemplateParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->templateParam) {
            $res['TemplateParam'] = $this->templateParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendPredefinedShortMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = $map['PhoneNumbers'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['TemplateParam'])) {
            $model->templateParam = $map['TemplateParam'];
        }

        return $model;
    }
}
