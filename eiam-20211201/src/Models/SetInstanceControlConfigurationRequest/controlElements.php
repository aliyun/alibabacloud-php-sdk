<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetInstanceControlConfigurationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetInstanceControlConfigurationRequest\controlElements\humanVerificationConfig;

class controlElements extends Model
{
    /**
     * @var string
     */
    public $elementName;

    /**
     * @var humanVerificationConfig
     */
    public $humanVerificationConfig;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'elementName' => 'ElementName',
        'humanVerificationConfig' => 'HumanVerificationConfig',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->humanVerificationConfig) {
            $this->humanVerificationConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elementName) {
            $res['ElementName'] = $this->elementName;
        }

        if (null !== $this->humanVerificationConfig) {
            $res['HumanVerificationConfig'] = null !== $this->humanVerificationConfig ? $this->humanVerificationConfig->toArray($noStream) : $this->humanVerificationConfig;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ElementName'])) {
            $model->elementName = $map['ElementName'];
        }

        if (isset($map['HumanVerificationConfig'])) {
            $model->humanVerificationConfig = humanVerificationConfig::fromMap($map['HumanVerificationConfig']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
