<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitImageTranslateTaskRequest\ext;

use AlibabaCloud\Dara\Model;

class textTransform extends Model
{
    /**
     * @var bool
     */
    public $toLower;

    /**
     * @var bool
     */
    public $toTitle;

    /**
     * @var bool
     */
    public $toUpper;
    protected $_name = [
        'toLower' => 'toLower',
        'toTitle' => 'toTitle',
        'toUpper' => 'toUpper',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->toLower) {
            $res['toLower'] = $this->toLower;
        }

        if (null !== $this->toTitle) {
            $res['toTitle'] = $this->toTitle;
        }

        if (null !== $this->toUpper) {
            $res['toUpper'] = $this->toUpper;
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
        if (isset($map['toLower'])) {
            $model->toLower = $map['toLower'];
        }

        if (isset($map['toTitle'])) {
            $model->toTitle = $map['toTitle'];
        }

        if (isset($map['toUpper'])) {
            $model->toUpper = $map['toUpper'];
        }

        return $model;
    }
}
