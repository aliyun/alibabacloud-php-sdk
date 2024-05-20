<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class RescaleApplicationVerticallyRequest extends Model
{
    /**
     * @description The application ID.
     *
     * This parameter is required.
     * @example 0099b7be-5f5b-4512-a7fc-56049ef1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The destination CPU specification. Unit: millicore.
     *
     * This parameter is required.
     * @example 1000
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The destination memory size. Unit: MB.
     *
     * This parameter is required.
     * @example 2048
     *
     * @var string
     */
    public $memory;
    protected $_name = [
        'appId'  => 'AppId',
        'cpu'    => 'Cpu',
        'memory' => 'Memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RescaleApplicationVerticallyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
