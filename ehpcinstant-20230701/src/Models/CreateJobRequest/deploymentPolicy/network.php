<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\deploymentPolicy;

use AlibabaCloud\Dara\Model;

class network extends Model
{
    /**
     * @var bool
     */
    public $enableExternalIpAddress;

    /**
     * @var string[]
     */
    public $vswitch;
    protected $_name = [
        'enableExternalIpAddress' => 'EnableExternalIpAddress',
        'vswitch' => 'Vswitch',
    ];

    public function validate()
    {
        if (\is_array($this->vswitch)) {
            Model::validateArray($this->vswitch);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableExternalIpAddress) {
            $res['EnableExternalIpAddress'] = $this->enableExternalIpAddress;
        }

        if (null !== $this->vswitch) {
            if (\is_array($this->vswitch)) {
                $res['Vswitch'] = [];
                $n1 = 0;
                foreach ($this->vswitch as $item1) {
                    $res['Vswitch'][$n1] = $item1;
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
        if (isset($map['EnableExternalIpAddress'])) {
            $model->enableExternalIpAddress = $map['EnableExternalIpAddress'];
        }

        if (isset($map['Vswitch'])) {
            if (!empty($map['Vswitch'])) {
                $model->vswitch = [];
                $n1 = 0;
                foreach ($map['Vswitch'] as $item1) {
                    $model->vswitch[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
