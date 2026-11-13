<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiListApiInfo;

use AlibabaCloud\Dara\Model;

class modelCardRuntimeDiagnostics extends Model
{
    /**
     * @var int
     */
    public $deployConfigIndex;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var bool
     */
    public $invalidConfiguration;

    /**
     * @var string[]
     */
    public $reasons;
    protected $_name = [
        'deployConfigIndex' => 'deployConfigIndex',
        'gatewayId' => 'gatewayId',
        'invalidConfiguration' => 'invalidConfiguration',
        'reasons' => 'reasons',
    ];

    public function validate()
    {
        if (\is_array($this->reasons)) {
            Model::validateArray($this->reasons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployConfigIndex) {
            $res['deployConfigIndex'] = $this->deployConfigIndex;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->invalidConfiguration) {
            $res['invalidConfiguration'] = $this->invalidConfiguration;
        }

        if (null !== $this->reasons) {
            if (\is_array($this->reasons)) {
                $res['reasons'] = [];
                $n1 = 0;
                foreach ($this->reasons as $item1) {
                    $res['reasons'][$n1] = $item1;
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
        if (isset($map['deployConfigIndex'])) {
            $model->deployConfigIndex = $map['deployConfigIndex'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['invalidConfiguration'])) {
            $model->invalidConfiguration = $map['invalidConfiguration'];
        }

        if (isset($map['reasons'])) {
            if (!empty($map['reasons'])) {
                $model->reasons = [];
                $n1 = 0;
                foreach ($map['reasons'] as $item1) {
                    $model->reasons[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
