<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateDialogFlowRequest;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\PaasProcessData;
use AlibabaCloud\Tea\Model;

class moduleDefinition extends Model
{
    /**
     * @example {"name":"", "uid":""}
     *
     * @var mixed[]
     */
    public $globalVars;

    /**
     * @var PaasProcessData
     */
    public $moduleDefinition;
    protected $_name = [
        'globalVars'       => 'GlobalVars',
        'moduleDefinition' => 'ModuleDefinition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalVars) {
            $res['GlobalVars'] = $this->globalVars;
        }
        if (null !== $this->moduleDefinition) {
            $res['ModuleDefinition'] = null !== $this->moduleDefinition ? $this->moduleDefinition->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleDefinition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalVars'])) {
            $model->globalVars = $map['GlobalVars'];
        }
        if (isset($map['ModuleDefinition'])) {
            $model->moduleDefinition = PaasProcessData::fromMap($map['ModuleDefinition']);
        }

        return $model;
    }
}
