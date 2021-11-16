<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\wizardDetails\wizardConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\wizardDetails\wizardRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\wizardDetails\wizardResponseParameters;
use AlibabaCloud\Tea\Model;

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
        'isPagedResponse'          => 'IsPagedResponse',
        'wizardConnection'         => 'WizardConnection',
        'wizardRequestParameters'  => 'WizardRequestParameters',
        'wizardResponseParameters' => 'WizardResponseParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPagedResponse) {
            $res['IsPagedResponse'] = $this->isPagedResponse;
        }
        if (null !== $this->wizardConnection) {
            $res['WizardConnection'] = null !== $this->wizardConnection ? $this->wizardConnection->toMap() : null;
        }
        if (null !== $this->wizardRequestParameters) {
            $res['WizardRequestParameters'] = [];
            if (null !== $this->wizardRequestParameters && \is_array($this->wizardRequestParameters)) {
                $n = 0;
                foreach ($this->wizardRequestParameters as $item) {
                    $res['WizardRequestParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->wizardResponseParameters) {
            $res['WizardResponseParameters'] = [];
            if (null !== $this->wizardResponseParameters && \is_array($this->wizardResponseParameters)) {
                $n = 0;
                foreach ($this->wizardResponseParameters as $item) {
                    $res['WizardResponseParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wizardDetails
     */
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
                $n                              = 0;
                foreach ($map['WizardRequestParameters'] as $item) {
                    $model->wizardRequestParameters[$n++] = null !== $item ? wizardRequestParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WizardResponseParameters'])) {
            if (!empty($map['WizardResponseParameters'])) {
                $model->wizardResponseParameters = [];
                $n                               = 0;
                foreach ($map['WizardResponseParameters'] as $item) {
                    $model->wizardResponseParameters[$n++] = null !== $item ? wizardResponseParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
