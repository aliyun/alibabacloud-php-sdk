<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateMcpServiceRequest\connection;

use AlibabaCloud\Dara\Model;

class auth extends Model
{
    /**
     * @var string[]
     */
    public $keyInfo;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'keyInfo' => 'keyInfo',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->keyInfo)) {
            Model::validateArray($this->keyInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyInfo) {
            if (\is_array($this->keyInfo)) {
                $res['keyInfo'] = [];
                foreach ($this->keyInfo as $key1 => $value1) {
                    $res['keyInfo'][$key1] = $value1;
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
        if (isset($map['keyInfo'])) {
            if (!empty($map['keyInfo'])) {
                $model->keyInfo = [];
                foreach ($map['keyInfo'] as $key1 => $value1) {
                    $model->keyInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
