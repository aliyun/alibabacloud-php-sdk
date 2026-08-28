<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelCredentialRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string[]
     */
    public $credential;
    protected $_name = [
        'credential' => 'credential',
    ];

    public function validate()
    {
        if (\is_array($this->credential)) {
            Model::validateArray($this->credential);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credential) {
            if (\is_array($this->credential)) {
                $res['credential'] = [];
                foreach ($this->credential as $key1 => $value1) {
                    $res['credential'][$key1] = $value1;
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
        if (isset($map['credential'])) {
            if (!empty($map['credential'])) {
                $model->credential = [];
                foreach ($map['credential'] as $key1 => $value1) {
                    $model->credential[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
