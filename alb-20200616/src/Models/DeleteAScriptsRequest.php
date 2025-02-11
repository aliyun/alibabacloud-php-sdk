<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;

class DeleteAScriptsRequest extends Model
{
    /**
     * @var string[]
     */
    public $AScriptIds;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'AScriptIds'  => 'AScriptIds',
        'clientToken' => 'ClientToken',
        'dryRun'      => 'DryRun',
    ];

    public function validate()
    {
        if (\is_array($this->AScriptIds)) {
            Model::validateArray($this->AScriptIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AScriptIds) {
            if (\is_array($this->AScriptIds)) {
                $res['AScriptIds'] = [];
                $n1                = 0;
                foreach ($this->AScriptIds as $item1) {
                    $res['AScriptIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (isset($map['AScriptIds'])) {
            if (!empty($map['AScriptIds'])) {
                $model->AScriptIds = [];
                $n1                = 0;
                foreach ($map['AScriptIds'] as $item1) {
                    $model->AScriptIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        return $model;
    }
}
