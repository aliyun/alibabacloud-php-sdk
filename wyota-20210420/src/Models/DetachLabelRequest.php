<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class DetachLabelRequest extends Model
{
    /**
     * @var string
     */
    public $labelContent;

    /**
     * @var string
     */
    public $labelId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $serialNo;
    protected $_name = [
        'labelContent' => 'LabelContent',
        'labelId'      => 'LabelId',
        'serialNo'     => 'SerialNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelContent) {
            $res['LabelContent'] = $this->labelContent;
        }
        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelContent'])) {
            $model->labelContent = $map['LabelContent'];
        }
        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        return $model;
    }
}
