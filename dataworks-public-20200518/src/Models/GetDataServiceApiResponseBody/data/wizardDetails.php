<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\wizardDetails\wizardConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\wizardDetails\wizardRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\wizardDetails\wizardResponseParameters;

class wizardDetails extends Model
{
    /**
     * @var bool
     */
    public $isPagedResponse;

    /**
     * @var wizardConnection
     */
    public $wizardConnection;

    /**
     * @var wizardRequestParameters[]
     */
    public $wizardRequestParameters;

    /**
     * @var wizardResponseParameters[]
     */
    public $wizardResponseParameters;
    protected $_name = [
        'isPagedResponse' => 'IsPagedResponse',
        'wizardConnection' => 'WizardConnection',
        'wizardRequestParameters' => 'WizardRequestParameters',
        'wizardResponseParameters' => 'WizardResponseParameters',
    ];

    public function validate()
    {
        if (null !== $this->wizardConnection) {
            $this->wizardConnection->validate();
        }
        if (\is_array($this->wizardRequestParameters)) {
            Model::validateArray($this->wizardRequestParameters);
        }
        if (\is_array($this->wizardResponseParameters)) {
            Model::validateArray($this->wizardResponseParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isPagedResponse) {
            $res['IsPagedResponse'] = $this->isPagedResponse;
        }

        if (null !== $this->wizardConnection) {
            $res['WizardConnection'] = null !== $this->wizardConnection ? $this->wizardConnection->toArray($noStream) : $this->wizardConnection;
        }

        if (null !== $this->wizardRequestParameters) {
            if (\is_array($this->wizardRequestParameters)) {
                $res['WizardRequestParameters'] = [];
                $n1 = 0;
                foreach ($this->wizardRequestParameters as $item1) {
                    $res['WizardRequestParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->wizardResponseParameters) {
            if (\is_array($this->wizardResponseParameters)) {
                $res['WizardResponseParameters'] = [];
                $n1 = 0;
                foreach ($this->wizardResponseParameters as $item1) {
                    $res['WizardResponseParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['IsPagedResponse'])) {
            $model->isPagedResponse = $map['IsPagedResponse'];
        }

        if (isset($map['WizardConnection'])) {
            $model->wizardConnection = wizardConnection::fromMap($map['WizardConnection']);
        }

        if (isset($map['WizardRequestParameters'])) {
            if (!empty($map['WizardRequestParameters'])) {
                $model->wizardRequestParameters = [];
                $n1 = 0;
                foreach ($map['WizardRequestParameters'] as $item1) {
                    $model->wizardRequestParameters[$n1++] = wizardRequestParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['WizardResponseParameters'])) {
            if (!empty($map['WizardResponseParameters'])) {
                $model->wizardResponseParameters = [];
                $n1 = 0;
                foreach ($map['WizardResponseParameters'] as $item1) {
                    $model->wizardResponseParameters[$n1++] = wizardResponseParameters::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
