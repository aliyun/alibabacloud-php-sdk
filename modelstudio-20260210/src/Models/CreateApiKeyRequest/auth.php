<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateApiKeyRequest;

use AlibabaCloud\Dara\Model;

class auth extends Model
{
    /**
     * @var string[]
     */
    public $accessIps;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'accessIps' => 'accessIps',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->accessIps)) {
            Model::validateArray($this->accessIps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessIps) {
            if (\is_array($this->accessIps)) {
                $res['accessIps'] = [];
                $n1 = 0;
                foreach ($this->accessIps as $item1) {
                    $res['accessIps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['accessIps'])) {
            if (!empty($map['accessIps'])) {
                $model->accessIps = [];
                $n1 = 0;
                foreach ($map['accessIps'] as $item1) {
                    $model->accessIps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
