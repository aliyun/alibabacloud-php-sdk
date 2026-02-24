<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IndexKey extends Model
{
    /**
     * @var bool
     */
    public $chn;

    /**
     * @var string
     */
    public $embedding;

    /**
     * @var IndexJsonKey[]
     */
    public $jsonKeys;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'chn' => 'chn',
        'embedding' => 'embedding',
        'jsonKeys' => 'jsonKeys',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->jsonKeys)) {
            Model::validateArray($this->jsonKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chn) {
            $res['chn'] = $this->chn;
        }

        if (null !== $this->embedding) {
            $res['embedding'] = $this->embedding;
        }

        if (null !== $this->jsonKeys) {
            if (\is_array($this->jsonKeys)) {
                $res['jsonKeys'] = [];
                foreach ($this->jsonKeys as $key1 => $value1) {
                    $res['jsonKeys'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['chn'])) {
            $model->chn = $map['chn'];
        }

        if (isset($map['embedding'])) {
            $model->embedding = $map['embedding'];
        }

        if (isset($map['jsonKeys'])) {
            if (!empty($map['jsonKeys'])) {
                $model->jsonKeys = [];
                foreach ($map['jsonKeys'] as $key1 => $value1) {
                    $model->jsonKeys[$key1] = IndexJsonKey::fromMap($value1);
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
