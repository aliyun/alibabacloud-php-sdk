<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\wizardDetails\wizardConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\wizardDetails\wizardRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\wizardDetails\wizardResponseParameters;
use AlibabaCloud\Tea\Model;

class wizardDetails extends Model
{
    /**
     * @description Indicates whether the entries were returned by page.
     *
     * @example true
     *
     * @var bool
     */
    public $isPagedResponse;

    /**
     * @description The data source information of the API generated in wizard mode.
     *
     * @var wizardConnection
     */
    public $wizardConnection;

    /**
     * @description The request parameters of the API generated in wizard mode.
     *
     * @var wizardRequestParameters[]
     */
    public $wizardRequestParameters;

    /**
     * @description The response parameters of the API generated in wizard mode.
     *
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
