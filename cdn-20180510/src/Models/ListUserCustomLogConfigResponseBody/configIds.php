<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\ListUserCustomLogConfigResponseBody;

use AlibabaCloud\Dara\Model;

class configIds extends Model
{
    /**
     * @var string[]
     */
    public $configId;
    protected $_name = [
        'configId' => 'ConfigId',
    ];

    public function validate()
    {
        if (\is_array($this->configId)) {
            Model::validateArray($this->configId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configId) {
            if (\is_array($this->configId)) {
                $res['ConfigId'] = [];
                $n1 = 0;
                foreach ($this->configId as $item1) {
                    $res['ConfigId'][$n1] = $item1;
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
        if (isset($map['ConfigId'])) {
            if (!empty($map['ConfigId'])) {
                $model->configId = [];
                $n1 = 0;
                foreach ($map['ConfigId'] as $item1) {
                    $model->configId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
