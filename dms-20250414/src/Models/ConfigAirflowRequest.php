<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ConfigAirflowRequest extends Model
{
    /**
     * @var string
     */
    public $airflowId;

    /**
     * @var string[]
     */
    public $customAirflowCfg;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'airflowId' => 'AirflowId',
        'customAirflowCfg' => 'CustomAirflowCfg',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->customAirflowCfg)) {
            Model::validateArray($this->customAirflowCfg);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airflowId) {
            $res['AirflowId'] = $this->airflowId;
        }

        if (null !== $this->customAirflowCfg) {
            if (\is_array($this->customAirflowCfg)) {
                $res['CustomAirflowCfg'] = [];
                $n1 = 0;
                foreach ($this->customAirflowCfg as $item1) {
                    $res['CustomAirflowCfg'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['CustomAirflowCfg'])) {
                $model->customAirflowCfg = [];
                $n1 = 0;
                foreach ($map['CustomAirflowCfg'] as $item1) {
                    $model->customAirflowCfg[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
