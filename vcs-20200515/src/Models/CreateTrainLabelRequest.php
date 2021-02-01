<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class CreateTrainLabelRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmId;

    /**
     * @var string
     */
    public $labelName;
    protected $_name = [
        'algorithmId' => 'AlgorithmId',
        'labelName'   => 'LabelName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrainLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }

        return $model;
    }
}
