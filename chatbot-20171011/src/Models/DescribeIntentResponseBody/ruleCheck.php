<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeIntentResponseBody;

use AlibabaCloud\Tea\Model;

class ruleCheck extends Model
{
    /**
     * @var string[]
     */
    public $error;

    /**
     * @example false
     *
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
        'error'   => 'Error',
        'strict'  => 'Strict',
        'text'    => 'Text',
        'warning' => 'Warning',
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
        if (null !== $this->strict) {
            $res['Strict'] = $this->strict;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->warning) {
            $res['Warning'] = $this->warning;
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
        if (isset($map['Strict'])) {
            $model->strict = $map['Strict'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Warning'])) {
            if (!empty($map['Warning'])) {
                $model->warning = $map['Warning'];
            }
        }

        return $model;
    }
}
