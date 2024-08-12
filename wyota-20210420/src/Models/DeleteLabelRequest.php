<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class DeleteLabelRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $force;

    /**
     * @var string
     */
    public $labelContent;

    /**
     * @var string
     */
    public $labelId;
    protected $_name = [
        'force'        => 'Force',
        'labelContent' => 'LabelContent',
        'labelId'      => 'LabelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->labelContent) {
            $res['LabelContent'] = $this->labelContent;
        }
        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['LabelContent'])) {
            $model->labelContent = $map['LabelContent'];
        }
        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }

        return $model;
    }
}
