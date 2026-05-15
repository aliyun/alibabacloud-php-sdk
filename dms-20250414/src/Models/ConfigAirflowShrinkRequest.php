<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ConfigAirflowShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $airflowId;

    /**
     * @var string
     */
    public $customAirflowCfgShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'airflowId' => 'AirflowId',
        'customAirflowCfgShrink' => 'CustomAirflowCfg',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airflowId) {
            $res['AirflowId'] = $this->airflowId;
        }

        if (null !== $this->customAirflowCfgShrink) {
            $res['CustomAirflowCfg'] = $this->customAirflowCfgShrink;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AirflowId'])) {
            $model->airflowId = $map['AirflowId'];
        }

        if (isset($map['CustomAirflowCfg'])) {
            $model->customAirflowCfgShrink = $map['CustomAirflowCfg'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
