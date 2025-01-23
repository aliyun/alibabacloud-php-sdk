<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails\wizardConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails\wizardErrorCodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails\wizardRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails\wizardResponseParameters;

class wizardDetails extends Model
{
    /**
     * @var string
     */
    public $failedResultSample;
    /**
     * @var bool
     */
    public $isPagedResponse;
    /**
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
        if (null !== $this->wizardConnection) {
            $this->wizardConnection->validate();
        }
        if (\is_array($this->wizardErrorCodes)) {
            Model::validateArray($this->wizardErrorCodes);
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
            $res['WizardConnection'] = null !== $this->wizardConnection ? $this->wizardConnection->toArray($noStream) : $this->wizardConnection;
        }

        if (null !== $this->wizardErrorCodes) {
            if (\is_array($this->wizardErrorCodes)) {
                $res['WizardErrorCodes'] = [];
                $n1                      = 0;
                foreach ($this->wizardErrorCodes as $item1) {
                    $res['WizardErrorCodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->wizardRequestParameters) {
            if (\is_array($this->wizardRequestParameters)) {
                $res['WizardRequestParameters'] = [];
                $n1                             = 0;
                foreach ($this->wizardRequestParameters as $item1) {
                    $res['WizardRequestParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->wizardResponseParameters) {
            if (\is_array($this->wizardResponseParameters)) {
                $res['WizardResponseParameters'] = [];
                $n1                              = 0;
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
                $n1                      = 0;
                foreach ($map['WizardErrorCodes'] as $item1) {
                    $model->wizardErrorCodes[$n1++] = wizardErrorCodes::fromMap($item1);
                }
            }
        }

        if (isset($map['WizardRequestParameters'])) {
            if (!empty($map['WizardRequestParameters'])) {
                $model->wizardRequestParameters = [];
                $n1                             = 0;
                foreach ($map['WizardRequestParameters'] as $item1) {
                    $model->wizardRequestParameters[$n1++] = wizardRequestParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['WizardResponseParameters'])) {
            if (!empty($map['WizardResponseParameters'])) {
                $model->wizardResponseParameters = [];
                $n1                              = 0;
                foreach ($map['WizardResponseParameters'] as $item1) {
                    $model->wizardResponseParameters[$n1++] = wizardResponseParameters::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
