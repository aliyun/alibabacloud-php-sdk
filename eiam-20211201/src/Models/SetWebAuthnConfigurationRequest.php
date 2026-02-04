<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetWebAuthnConfigurationRequest\aaguids;

class SetWebAuthnConfigurationRequest extends Model
{
    /**
     * @var aaguids[]
     */
    public $aaguids;

    /**
     * @var bool
     */
    public $enableAaguidVerification;

    /**
     * @var bool
     */
    public $enableMetadataServiceVerification;

    /**
     * @var bool
     */
    public $enableUserSelfRegistration;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'aaguids' => 'Aaguids',
        'enableAaguidVerification' => 'EnableAaguidVerification',
        'enableMetadataServiceVerification' => 'EnableMetadataServiceVerification',
        'enableUserSelfRegistration' => 'EnableUserSelfRegistration',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->aaguids)) {
            Model::validateArray($this->aaguids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aaguids) {
            if (\is_array($this->aaguids)) {
                $res['Aaguids'] = [];
                $n1 = 0;
                foreach ($this->aaguids as $item1) {
                    $res['Aaguids'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableAaguidVerification) {
            $res['EnableAaguidVerification'] = $this->enableAaguidVerification;
        }

        if (null !== $this->enableMetadataServiceVerification) {
            $res['EnableMetadataServiceVerification'] = $this->enableMetadataServiceVerification;
        }

        if (null !== $this->enableUserSelfRegistration) {
            $res['EnableUserSelfRegistration'] = $this->enableUserSelfRegistration;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['Aaguids'])) {
            if (!empty($map['Aaguids'])) {
                $model->aaguids = [];
                $n1 = 0;
                foreach ($map['Aaguids'] as $item1) {
                    $model->aaguids[$n1] = aaguids::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableAaguidVerification'])) {
            $model->enableAaguidVerification = $map['EnableAaguidVerification'];
        }

        if (isset($map['EnableMetadataServiceVerification'])) {
            $model->enableMetadataServiceVerification = $map['EnableMetadataServiceVerification'];
        }

        if (isset($map['EnableUserSelfRegistration'])) {
            $model->enableUserSelfRegistration = $map['EnableUserSelfRegistration'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
