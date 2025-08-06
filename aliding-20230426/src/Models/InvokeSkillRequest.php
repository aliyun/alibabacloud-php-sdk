<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class InvokeSkillRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'params' => 'Params',
        'skillId' => 'SkillId',
        'stream' => 'Stream',
    ];

    public function validate()
    {
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['Params'] = [];
                foreach ($this->params as $key1 => $value1) {
                    $res['Params'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
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
        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = [];
                foreach ($map['Params'] as $key1 => $value1) {
                    $model->params[$key1] = $value1;
                }
            }
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
