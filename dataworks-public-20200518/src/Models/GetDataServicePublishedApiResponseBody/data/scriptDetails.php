<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\scriptDetails\scriptConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\scriptDetails\scriptErrorCodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\scriptDetails\scriptRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\scriptDetails\scriptResponseParameters;
use AlibabaCloud\Tea\Model;

class scriptDetails extends Model
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
     * @description The SQL script.
     *
     * @example select a from t
     *
     * @var string
     */
    public $script;

    /**
     * @description The data source information of the API generated in script mode.
     *
     * @var scriptConnection
     */
    public $scriptConnection;

    /**
     * @description The error codes returned for the API generated in script mode.
     *
     * @var scriptErrorCodes[]
     */
    public $scriptErrorCodes;

    /**
     * @description The request parameters of the API generated in script mode.
     *
     * @var scriptRequestParameters[]
     */
    public $scriptRequestParameters;

    /**
     * @description The response parameters of the API generated in script mode.
     *
     * @var scriptResponseParameters[]
     */
    public $scriptResponseParameters;

    /**
     * @description The sample success response of the API.
     *
     * @example {"success": true}
     *
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
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->scriptConnection) {
            $res['ScriptConnection'] = null !== $this->scriptConnection ? $this->scriptConnection->toMap() : null;
        }
        if (null !== $this->scriptErrorCodes) {
            $res['ScriptErrorCodes'] = [];
            if (null !== $this->scriptErrorCodes && \is_array($this->scriptErrorCodes)) {
                $n = 0;
                foreach ($this->scriptErrorCodes as $item) {
                    $res['ScriptErrorCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scriptRequestParameters) {
            $res['ScriptRequestParameters'] = [];
            if (null !== $this->scriptRequestParameters && \is_array($this->scriptRequestParameters)) {
                $n = 0;
                foreach ($this->scriptRequestParameters as $item) {
                    $res['ScriptRequestParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scriptResponseParameters) {
            $res['ScriptResponseParameters'] = [];
            if (null !== $this->scriptResponseParameters && \is_array($this->scriptResponseParameters)) {
                $n = 0;
                foreach ($this->scriptResponseParameters as $item) {
                    $res['ScriptResponseParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->successfulResultSample) {
            $res['SuccessfulResultSample'] = $this->successfulResultSample;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scriptDetails
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
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['ScriptConnection'])) {
            $model->scriptConnection = scriptConnection::fromMap($map['ScriptConnection']);
        }
        if (isset($map['ScriptErrorCodes'])) {
            if (!empty($map['ScriptErrorCodes'])) {
                $model->scriptErrorCodes = [];
                $n                       = 0;
                foreach ($map['ScriptErrorCodes'] as $item) {
                    $model->scriptErrorCodes[$n++] = null !== $item ? scriptErrorCodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScriptRequestParameters'])) {
            if (!empty($map['ScriptRequestParameters'])) {
                $model->scriptRequestParameters = [];
                $n                              = 0;
                foreach ($map['ScriptRequestParameters'] as $item) {
                    $model->scriptRequestParameters[$n++] = null !== $item ? scriptRequestParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScriptResponseParameters'])) {
            if (!empty($map['ScriptResponseParameters'])) {
                $model->scriptResponseParameters = [];
                $n                               = 0;
                foreach ($map['ScriptResponseParameters'] as $item) {
                    $model->scriptResponseParameters[$n++] = null !== $item ? scriptResponseParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SuccessfulResultSample'])) {
            $model->successfulResultSample = $map['SuccessfulResultSample'];
        }

        return $model;
    }
}
