<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\InnerCreateSandboxVolumeMounts\agenticFs;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\InnerCreateSandboxVolumeMounts\named;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\InnerCreateSandboxVolumeMounts\oss;

class InnerCreateSandboxVolumeMounts extends Model
{
    /**
     * @var agenticFs
     */
    public $agenticFs;

    /**
     * @var named
     */
    public $named;

    /**
     * @var oss
     */
    public $oss;
    protected $_name = [
        'agenticFs' => 'agenticFs',
        'named' => 'named',
        'oss' => 'oss',
    ];

    public function validate()
    {
        if (null !== $this->agenticFs) {
            $this->agenticFs->validate();
        }
        if (null !== $this->named) {
            $this->named->validate();
        }
        if (null !== $this->oss) {
            $this->oss->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agenticFs) {
            $res['agenticFs'] = null !== $this->agenticFs ? $this->agenticFs->toArray($noStream) : $this->agenticFs;
        }

        if (null !== $this->named) {
            $res['named'] = null !== $this->named ? $this->named->toArray($noStream) : $this->named;
        }

        if (null !== $this->oss) {
            $res['oss'] = null !== $this->oss ? $this->oss->toArray($noStream) : $this->oss;
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
        if (isset($map['agenticFs'])) {
            $model->agenticFs = agenticFs::fromMap($map['agenticFs']);
        }

        if (isset($map['named'])) {
            $model->named = named::fromMap($map['named']);
        }

        if (isset($map['oss'])) {
            $model->oss = oss::fromMap($map['oss']);
        }

        return $model;
    }
}
