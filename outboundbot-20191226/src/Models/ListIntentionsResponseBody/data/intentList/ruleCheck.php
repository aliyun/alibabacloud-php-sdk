<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList;

use AlibabaCloud\Dara\Model;

class ruleCheck extends Model
{
    /**
     * @var string[]
     */
    public $error;

    /**
     * @var bool
     */
    public $strict;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string[]
     */
    public $warning;
    protected $_name = [
        'error' => 'Error',
        'strict' => 'Strict',
        'text' => 'Text',
        'warning' => 'Warning',
    ];

    public function validate()
    {
        if (\is_array($this->error)) {
            Model::validateArray($this->error);
        }
        if (\is_array($this->warning)) {
            Model::validateArray($this->warning);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->error) {
            if (\is_array($this->error)) {
                $res['Error'] = [];
                $n1 = 0;
                foreach ($this->error as $item1) {
                    $res['Error'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->strict) {
            $res['Strict'] = $this->strict;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->warning) {
            if (\is_array($this->warning)) {
                $res['Warning'] = [];
                $n1 = 0;
                foreach ($this->warning as $item1) {
                    $res['Warning'][$n1] = $item1;
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
        if (isset($map['Error'])) {
            if (!empty($map['Error'])) {
                $model->error = [];
                $n1 = 0;
                foreach ($map['Error'] as $item1) {
                    $model->error[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Strict'])) {
            $model->strict = $map['Strict'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Warning'])) {
            if (!empty($map['Warning'])) {
                $model->warning = [];
                $n1 = 0;
                foreach ($map['Warning'] as $item1) {
                    $model->warning[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
