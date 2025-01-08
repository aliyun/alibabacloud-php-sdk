<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\SyncSensitiveWordResponseBody\data;

use AlibabaCloud\Tea\Model;

class sensitiveWordErrorList extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $errMessage;

    /**
     * @example 1
     *
     * @var int
     */
    public $errStatus;

    /**
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @example contraband
     *
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'errMessage' => 'ErrMessage',
        'errStatus'  => 'ErrStatus',
        'index'      => 'Index',
        'label'      => 'Label',
        'word'       => 'Word',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->errStatus) {
            $res['ErrStatus'] = $this->errStatus;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->word) {
            $res['Word'] = $this->word;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveWordErrorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['ErrStatus'])) {
            $model->errStatus = $map['ErrStatus'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        return $model;
    }
}
