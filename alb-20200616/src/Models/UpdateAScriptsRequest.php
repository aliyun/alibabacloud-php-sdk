<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAScriptsRequest\AScripts;

class UpdateAScriptsRequest extends Model
{
    /**
     * @var AScripts[]
     */
    public $AScripts;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'AScripts' => 'AScripts',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
    ];

    public function validate()
    {
        if (\is_array($this->AScripts)) {
            Model::validateArray($this->AScripts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AScripts) {
            if (\is_array($this->AScripts)) {
                $res['AScripts'] = [];
                $n1 = 0;
                foreach ($this->AScripts as $item1) {
                    $res['AScripts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AScripts'])) {
            if (!empty($map['AScripts'])) {
                $model->AScripts = [];
                $n1 = 0;
                foreach ($map['AScripts'] as $item1) {
                    $model->AScripts[$n1] = AScripts::fromMap($item1);
                    ++$n1;
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
