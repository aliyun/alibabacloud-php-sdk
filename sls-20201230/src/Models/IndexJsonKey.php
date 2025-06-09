<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class IndexJsonKey extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var bool
     */
    public $caseSensitive;

    /**
     * @var bool
     */
    public $chn;

    /**
     * @var bool
     */
    public $docValue;

    /**
     * @var string[]
     */
    public $token;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alias' => 'alias',
        'caseSensitive' => 'caseSensitive',
        'chn' => 'chn',
        'docValue' => 'doc_value',
        'token' => 'token',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->token)) {
            Model::validateArray($this->token);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->caseSensitive) {
            $res['caseSensitive'] = $this->caseSensitive;
        }

        if (null !== $this->chn) {
            $res['chn'] = $this->chn;
        }

        if (null !== $this->docValue) {
            $res['doc_value'] = $this->docValue;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['caseSensitive'])) {
            $model->caseSensitive = $map['caseSensitive'];
        }

        if (isset($map['chn'])) {
            $model->chn = $map['chn'];
        }

        if (isset($map['doc_value'])) {
            $model->docValue = $map['doc_value'];
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

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
