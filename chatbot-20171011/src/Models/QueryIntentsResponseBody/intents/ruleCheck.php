<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryIntentsResponseBody\intents;

use AlibabaCloud\Tea\Model;

class ruleCheck extends Model
{
    /**
     * @var string[]
     */
    public $error;

    /**
     * @var string[]
     */
    public $warning;

    /**
     * @var string
     */
    public $text;

    /**
     * @var bool
     */
    public $strict;
    protected $_name = [
        'error'   => 'Error',
        'warning' => 'Warning',
        'text'    => 'Text',
        'strict'  => 'Strict',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->warning) {
            $res['Warning'] = $this->warning;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->strict) {
            $res['Strict'] = $this->strict;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Error'])) {
            if (!empty($map['Error'])) {
                $model->error = $map['Error'];
            }
        }
        if (isset($map['Warning'])) {
            if (!empty($map['Warning'])) {
                $model->warning = $map['Warning'];
            }
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Strict'])) {
            $model->strict = $map['Strict'];
        }

        return $model;
    }
}
