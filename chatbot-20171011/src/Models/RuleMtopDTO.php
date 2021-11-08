<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class RuleMtopDTO extends Model
{
    /**
     * @description Error
     *
     * @var string[]
     */
    public $error;

    /**
     * @description Strict
     *
     * @var bool
     */
    public $strict;

    /**
     * @description Text
     *
     * @var string
     */
    public $text;

    /**
     * @description Warning
     *
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
     * @return RuleMtopDTO
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
