<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\Index;

use AlibabaCloud\Dara\Model;

class line extends Model
{
    /**
     * @var bool
     */
    public $caseSensitive;

    /**
     * @var bool
     */
    public $chn;

    /**
     * @var string[]
     */
    public $excludeKeys;

    /**
     * @var string[]
     */
    public $includeKeys;

    /**
     * @var string[]
     */
    public $token;
    protected $_name = [
        'caseSensitive' => 'caseSensitive',
        'chn' => 'chn',
        'excludeKeys' => 'exclude_keys',
        'includeKeys' => 'include_keys',
        'token' => 'token',
    ];

    public function validate()
    {
        if (\is_array($this->excludeKeys)) {
            Model::validateArray($this->excludeKeys);
        }
        if (\is_array($this->includeKeys)) {
            Model::validateArray($this->includeKeys);
        }
        if (\is_array($this->token)) {
            Model::validateArray($this->token);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caseSensitive) {
            $res['caseSensitive'] = $this->caseSensitive;
        }

        if (null !== $this->chn) {
            $res['chn'] = $this->chn;
        }

        if (null !== $this->excludeKeys) {
            if (\is_array($this->excludeKeys)) {
                $res['exclude_keys'] = [];
                $n1 = 0;
                foreach ($this->excludeKeys as $item1) {
                    $res['exclude_keys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->includeKeys) {
            if (\is_array($this->includeKeys)) {
                $res['include_keys'] = [];
                $n1 = 0;
                foreach ($this->includeKeys as $item1) {
                    $res['include_keys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->token) {
            if (\is_array($this->token)) {
                $res['token'] = [];
                $n1 = 0;
                foreach ($this->token as $item1) {
                    $res['token'][$n1++] = $item1;
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
        if (isset($map['caseSensitive'])) {
            $model->caseSensitive = $map['caseSensitive'];
        }

        if (isset($map['chn'])) {
            $model->chn = $map['chn'];
        }

        if (isset($map['exclude_keys'])) {
            if (!empty($map['exclude_keys'])) {
                $model->excludeKeys = [];
                $n1 = 0;
                foreach ($map['exclude_keys'] as $item1) {
                    $model->excludeKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['include_keys'])) {
            if (!empty($map['include_keys'])) {
                $model->includeKeys = [];
                $n1 = 0;
                foreach ($map['include_keys'] as $item1) {
                    $model->includeKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['token'])) {
            if (!empty($map['token'])) {
                $model->token = [];
                $n1 = 0;
                foreach ($map['token'] as $item1) {
                    $model->token[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
