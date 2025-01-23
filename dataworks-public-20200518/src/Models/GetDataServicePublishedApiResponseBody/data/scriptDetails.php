<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\scriptDetails\scriptConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\scriptDetails\scriptErrorCodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\scriptDetails\scriptRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\scriptDetails\scriptResponseParameters;

class scriptDetails extends Model
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
    public $script;
    /**
     * @var scriptConnection
     */
    public $scriptConnection;
    /**
     * @var scriptErrorCodes[]
     */
    public $scriptErrorCodes;
    /**
     * @var scriptRequestParameters[]
     */
    public $scriptRequestParameters;
    /**
     * @var scriptResponseParameters[]
     */
    public $scriptResponseParameters;
    /**
     * @var string
     */
    public $successfulResultSample;
    protected $_name = [
        'failedResultSample'       => 'FailedResultSample',
        'isPagedResponse'          => 'IsPagedResponse',
        'script'                   => 'Script',
        'scriptConnection'         => 'ScriptConnection',
        'scriptErrorCodes'         => 'ScriptErrorCodes',
        'scriptRequestParameters'  => 'ScriptRequestParameters',
        'scriptResponseParameters' => 'ScriptResponseParameters',
        'successfulResultSample'   => 'SuccessfulResultSample',
    ];

    public function validate()
    {
        if (null !== $this->scriptConnection) {
            $this->scriptConnection->validate();
        }
        if (\is_array($this->scriptErrorCodes)) {
            Model::validateArray($this->scriptErrorCodes);
        }
        if (\is_array($this->scriptRequestParameters)) {
            Model::validateArray($this->scriptRequestParameters);
        }
        if (\is_array($this->scriptResponseParameters)) {
            Model::validateArray($this->scriptResponseParameters);
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

        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }

        if (null !== $this->scriptConnection) {
            $res['ScriptConnection'] = null !== $this->scriptConnection ? $this->scriptConnection->toArray($noStream) : $this->scriptConnection;
        }

        if (null !== $this->scriptErrorCodes) {
            if (\is_array($this->scriptErrorCodes)) {
                $res['ScriptErrorCodes'] = [];
                $n1                      = 0;
                foreach ($this->scriptErrorCodes as $item1) {
                    $res['ScriptErrorCodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->scriptRequestParameters) {
            if (\is_array($this->scriptRequestParameters)) {
                $res['ScriptRequestParameters'] = [];
                $n1                             = 0;
                foreach ($this->scriptRequestParameters as $item1) {
                    $res['ScriptRequestParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->scriptResponseParameters) {
            if (\is_array($this->scriptResponseParameters)) {
                $res['ScriptResponseParameters'] = [];
                $n1                              = 0;
                foreach ($this->scriptResponseParameters as $item1) {
                    $res['ScriptResponseParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->successfulResultSample) {
            $res['SuccessfulResultSample'] = $this->successfulResultSample;
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

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        if (isset($map['ScriptConnection'])) {
            $model->scriptConnection = scriptConnection::fromMap($map['ScriptConnection']);
        }

        if (isset($map['ScriptErrorCodes'])) {
            if (!empty($map['ScriptErrorCodes'])) {
                $model->scriptErrorCodes = [];
                $n1                      = 0;
                foreach ($map['ScriptErrorCodes'] as $item1) {
                    $model->scriptErrorCodes[$n1++] = scriptErrorCodes::fromMap($item1);
                }
            }
        }

        if (isset($map['ScriptRequestParameters'])) {
            if (!empty($map['ScriptRequestParameters'])) {
                $model->scriptRequestParameters = [];
                $n1                             = 0;
                foreach ($map['ScriptRequestParameters'] as $item1) {
                    $model->scriptRequestParameters[$n1++] = scriptRequestParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['ScriptResponseParameters'])) {
            if (!empty($map['ScriptResponseParameters'])) {
                $model->scriptResponseParameters = [];
                $n1                              = 0;
                foreach ($map['ScriptResponseParameters'] as $item1) {
                    $model->scriptResponseParameters[$n1++] = scriptResponseParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['SuccessfulResultSample'])) {
            $model->successfulResultSample = $map['SuccessfulResultSample'];
        }

        return $model;
    }
}
