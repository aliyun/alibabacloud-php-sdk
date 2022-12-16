<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponseBody\data\apis;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponseBody\data\apis\wizardDetails\wizardConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponseBody\data\apis\wizardDetails\wizardErrorCodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponseBody\data\apis\wizardDetails\wizardRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponseBody\data\apis\wizardDetails\wizardResponseParameters;
use AlibabaCloud\Tea\Model;

class wizardDetails extends Model
{
    /**
     * @example {"success": false}
     *
     * @var string
     */
    public $failedResultSample;

    /**
     * @example true
     *
     * @var bool
     */
    public $isPagedResponse;

    /**
     * @example {"success": true}
     *
     * @var string
     */
    public $successfulResultSample;

    /**
     * @var wizardConnection
     */
    public $wizardConnection;

    /**
     * @var wizardErrorCodes[]
     */
    public $wizardErrorCodes;

    /**
     * @var wizardRequestParameters[]
     */
    public $wizardRequestParameters;

    /**
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
