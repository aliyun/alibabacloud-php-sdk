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
     * @var string
     */
    public $script;

    /**
     * @var bool
     */
    public $isPagedResponse;

    /**
     * @var scriptRequestParameters[]
     */
    public $scriptRequestParameters;

    /**
     * @var scriptResponseParameters[]
     */
    public $scriptResponseParameters;

    /**
     * @var scriptConnection
     */
    public $scriptConnection;
    protected $_name = [
        'script'                   => 'Script',
        'isPagedResponse'          => 'IsPagedResponse',
        'scriptRequestParameters'  => 'ScriptRequestParameters',
        'scriptResponseParameters' => 'ScriptResponseParameters',
        'scriptConnection'         => 'ScriptConnection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->isPagedResponse) {
            $res['IsPagedResponse'] = $this->isPagedResponse;
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
        if (null !== $this->scriptConnection) {
            $res['ScriptConnection'] = null !== $this->scriptConnection ? $this->scriptConnection->toMap() : null;
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
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['IsPagedResponse'])) {
            $model->isPagedResponse = $map['IsPagedResponse'];
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
        if (isset($map['ScriptConnection'])) {
            $model->scriptConnection = scriptConnection::fromMap($map['ScriptConnection']);
        }

        return $model;
    }
}
