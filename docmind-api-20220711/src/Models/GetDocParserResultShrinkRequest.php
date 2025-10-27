<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Dara\Model;

class GetDocParserResultShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $excludeFieldsShrink;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $layoutNum;

    /**
     * @var int
     */
    public $layoutStepSize;
    protected $_name = [
        'excludeFieldsShrink' => 'ExcludeFields',
        'id' => 'Id',
        'layoutNum' => 'LayoutNum',
        'layoutStepSize' => 'LayoutStepSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeFieldsShrink) {
            $res['ExcludeFields'] = $this->excludeFieldsShrink;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->layoutNum) {
            $res['LayoutNum'] = $this->layoutNum;
        }

        if (null !== $this->layoutStepSize) {
            $res['LayoutStepSize'] = $this->layoutStepSize;
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
        if (isset($map['ExcludeFields'])) {
            $model->excludeFieldsShrink = $map['ExcludeFields'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LayoutNum'])) {
            $model->layoutNum = $map['LayoutNum'];
        }

        if (isset($map['LayoutStepSize'])) {
            $model->layoutStepSize = $map['LayoutStepSize'];
        }

        return $model;
    }
}
