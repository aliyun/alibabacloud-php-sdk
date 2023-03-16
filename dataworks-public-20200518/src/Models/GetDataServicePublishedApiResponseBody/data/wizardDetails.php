<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails\wizardConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails\wizardErrorCodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails\wizardRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails\wizardResponseParameters;
use AlibabaCloud\Tea\Model;

class wizardDetails extends Model
{
    /**
     * @description The sample error response of the API.
     *
     * @example {"success": false}
     *
     * @var string
     */
    public $failedResultSample;

    /**
     * @description Indicates whether the entries were returned by page.
     *
     * @example true
     *
     * @var bool
     */
    public $isPagedResponse;

    /**
     * @description The sample success response of the API.
     *
     * @example {"success": true}
     *
     * @var string
     */
    public $successfulResultSample;

    /**
     * @description The data source information of the API generated in wizard mode.
     *
     * @var wizardConnection
     */
    public $wizardConnection;

    /**
     * @description The error codes returned for the API generated in wizard mode.
     *
     * @var wizardErrorCodes[]
     */
    public $wizardErrorCodes;

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
        'failedResultSample'       => 'FailedResultSample',
        'isPagedResponse'          => 'IsPagedResponse',
        'successfulResultSample'   => 'SuccessfulResultSample',
        'wizardConnection'         => 'WizardConnection',
        'wizardErrorCodes'         => 'WizardErrorCodes',
        'wizardRequestParameters'  => 'WizardRequestParameters',
        'wizardResponseParameters' => 'WizardResponseParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedResultSample) {
            $res['FailedResultSample'] = $this->failedResultSample;
        }
        if (null !== $this->isPagedResponse) {
            $res['IsPagedResponse'] = $this->isPagedResponse;
        }
        if (null !== $this->successfulResultSample) {
            $res['SuccessfulResultSample'] = $this->successfulResultSample;
        }
        if (null !== $this->wizardConnection) {
            $res['WizardConnection'] = null !== $this->wizardConnection ? $this->wizardConnection->toMap() : null;
        }
        if (null !== $this->wizardErrorCodes) {
            $res['WizardErrorCodes'] = [];
            if (null !== $this->wizardErrorCodes && \is_array($this->wizardErrorCodes)) {
                $n = 0;
                foreach ($this->wizardErrorCodes as $item) {
                    $res['WizardErrorCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['FailedResultSample'])) {
            $model->failedResultSample = $map['FailedResultSample'];
        }
        if (isset($map['IsPagedResponse'])) {
            $model->isPagedResponse = $map['IsPagedResponse'];
        }
        if (isset($map['SuccessfulResultSample'])) {
            $model->successfulResultSample = $map['SuccessfulResultSample'];
        }
        if (isset($map['WizardConnection'])) {
            $model->wizardConnection = wizardConnection::fromMap($map['WizardConnection']);
        }
        if (isset($map['WizardErrorCodes'])) {
            if (!empty($map['WizardErrorCodes'])) {
                $model->wizardErrorCodes = [];
                $n                       = 0;
                foreach ($map['WizardErrorCodes'] as $item) {
                    $model->wizardErrorCodes[$n++] = null !== $item ? wizardErrorCodes::fromMap($item) : $item;
                }
            }
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
