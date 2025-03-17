<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Tea\Model;

class GetDocParserResultRequest extends Model
{
    /**
     * @example docmind-20220816-1e89d65c
     *
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
        'id' => 'Id',
        'layoutNum' => 'LayoutNum',
        'layoutStepSize' => 'LayoutStepSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return GetDocParserResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
