<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\scriptDetails\scriptConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\scriptDetails\scriptRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\scriptDetails\scriptResponseParameters;

class scriptDetails extends Model
{
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
     * @var scriptRequestParameters[]
     */
    public $scriptRequestParameters;

    /**
     * @var scriptResponseParameters[]
     */
    public $scriptResponseParameters;
    protected $_name = [
        'isPagedResponse' => 'IsPagedResponse',
        'script' => 'Script',
        'scriptConnection' => 'ScriptConnection',
        'scriptRequestParameters' => 'ScriptRequestParameters',
        'scriptResponseParameters' => 'ScriptResponseParameters',
    ];

    public function validate()
    {
        if (null !== $this->scriptConnection) {
            $this->scriptConnection->validate();
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
        if (null !== $this->isPagedResponse) {
            $res['IsPagedResponse'] = $this->isPagedResponse;
        }

        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }

        if (null !== $this->scriptConnection) {
            $res['ScriptConnection'] = null !== $this->scriptConnection ? $this->scriptConnection->toArray($noStream) : $this->scriptConnection;
        }

        if (null !== $this->scriptRequestParameters) {
            if (\is_array($this->scriptRequestParameters)) {
                $res['ScriptRequestParameters'] = [];
                $n1 = 0;
                foreach ($this->scriptRequestParameters as $item1) {
                    $res['ScriptRequestParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scriptResponseParameters) {
            if (\is_array($this->scriptResponseParameters)) {
                $res['ScriptResponseParameters'] = [];
                $n1 = 0;
                foreach ($this->scriptResponseParameters as $item1) {
                    $res['ScriptResponseParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        if (isset($map['ScriptConnection'])) {
            $model->scriptConnection = scriptConnection::fromMap($map['ScriptConnection']);
        }

        if (isset($map['ScriptRequestParameters'])) {
            if (!empty($map['ScriptRequestParameters'])) {
                $model->scriptRequestParameters = [];
                $n1 = 0;
                foreach ($map['ScriptRequestParameters'] as $item1) {
                    $model->scriptRequestParameters[$n1] = scriptRequestParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ScriptResponseParameters'])) {
            if (!empty($map['ScriptResponseParameters'])) {
                $model->scriptResponseParameters = [];
                $n1 = 0;
                foreach ($map['ScriptResponseParameters'] as $item1) {
                    $model->scriptResponseParameters[$n1] = scriptResponseParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
