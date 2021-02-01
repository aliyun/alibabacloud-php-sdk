<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class UpdateTrainLabelRequest extends Model
{
    /**
     * @var string
     */
    public $labelId;

    /**
     * @var string
     */
    public $labelName;
    protected $_name = [
        'labelId'   => 'LabelId',
        'labelName' => 'LabelName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
        }
        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTrainLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }
        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }

        return $model;
    }
}
