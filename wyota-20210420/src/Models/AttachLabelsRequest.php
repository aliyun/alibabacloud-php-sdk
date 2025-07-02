<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class AttachLabelsRequest extends Model
{
    /**
     * @var string
     */
    public $labelIds;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $serialNoList;
    protected $_name = [
        'labelIds' => 'LabelIds',
        'serialNo' => 'SerialNo',
        'serialNoList' => 'SerialNoList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelIds) {
            $res['LabelIds'] = $this->labelIds;
        }

        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        if (null !== $this->serialNoList) {
            $res['SerialNoList'] = $this->serialNoList;
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
        if (isset($map['LabelIds'])) {
            $model->labelIds = $map['LabelIds'];
        }

        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        if (isset($map['SerialNoList'])) {
            $model->serialNoList = $map['SerialNoList'];
        }

        return $model;
    }
}
