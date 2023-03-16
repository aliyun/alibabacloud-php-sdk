<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\scriptDetails\scriptConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\scriptDetails\scriptRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\scriptDetails\scriptResponseParameters;
use AlibabaCloud\Tea\Model;

class scriptDetails extends Model
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
    protected $_name = [
        'isPagedResponse'          => 'IsPagedResponse',
        'script'                   => 'Script',
        'scriptConnection'         => 'ScriptConnection',
        'scriptRequestParameters'  => 'ScriptRequestParameters',
        'scriptResponseParameters' => 'ScriptResponseParameters',
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
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->scriptConnection) {
            $res['ScriptConnection'] = null !== $this->scriptConnection ? $this->scriptConnection->toMap() : null;
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
        if (isset($map['IsPagedResponse'])) {
            $model->isPagedResponse = $map['IsPagedResponse'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['ScriptConnection'])) {
            $model->scriptConnection = scriptConnection::fromMap($map['ScriptConnection']);
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

        return $model;
    }
}
