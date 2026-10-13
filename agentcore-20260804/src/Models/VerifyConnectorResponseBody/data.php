<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyConnectorResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $invalidServiceAccountKeys;

    /**
     * @var bool
     */
    public $valid;
    protected $_name = [
        'invalidServiceAccountKeys' => 'invalidServiceAccountKeys',
        'valid' => 'valid',
    ];

    public function validate()
    {
        if (\is_array($this->invalidServiceAccountKeys)) {
            Model::validateArray($this->invalidServiceAccountKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidServiceAccountKeys) {
            if (\is_array($this->invalidServiceAccountKeys)) {
                $res['invalidServiceAccountKeys'] = [];
                $n1 = 0;
                foreach ($this->invalidServiceAccountKeys as $item1) {
                    $res['invalidServiceAccountKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->valid) {
            $res['valid'] = $this->valid;
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
        if (isset($map['invalidServiceAccountKeys'])) {
            if (!empty($map['invalidServiceAccountKeys'])) {
                $model->invalidServiceAccountKeys = [];
                $n1 = 0;
                foreach ($map['invalidServiceAccountKeys'] as $item1) {
                    $model->invalidServiceAccountKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['valid'])) {
            $model->valid = $map['valid'];
        }

        return $model;
    }
}
