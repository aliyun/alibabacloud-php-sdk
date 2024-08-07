<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ModifyCopilotEmbedConfigRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @description This parameter is required.
     *
     * @example ccd3428c-dd2xxxxxxxxxxxxdffee
     *
     * @var string
     */
    public $copilotId;

    /**
     * @example Map<String,Object> data=new HashMap<>();
     * request.setDataRange(JSON.toJSONString(data));
     * @var string
     */
    public $dataRange;

    /**
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'agentName'  => 'AgentName',
        'copilotId'  => 'CopilotId',
        'dataRange'  => 'DataRange',
        'moduleName' => 'ModuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->copilotId) {
            $res['CopilotId'] = $this->copilotId;
        }
        if (null !== $this->dataRange) {
            $res['DataRange'] = $this->dataRange;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCopilotEmbedConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['CopilotId'])) {
            $model->copilotId = $map['CopilotId'];
        }
        if (isset($map['DataRange'])) {
            $model->dataRange = $map['DataRange'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}
