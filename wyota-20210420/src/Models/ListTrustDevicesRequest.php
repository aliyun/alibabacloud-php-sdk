<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class ListTrustDevicesRequest extends Model
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
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $userCustomId;
    protected $_name = [
        'labelContent' => 'LabelContent',
        'labelId' => 'LabelId',
        'serialNo' => 'SerialNo',
        'userCustomId' => 'UserCustomId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->userCustomId) {
            $res['UserCustomId'] = $this->userCustomId;
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
        if (isset($map['LabelContent'])) {
            $model->labelContent = $map['LabelContent'];
        }

        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }

        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        if (isset($map['UserCustomId'])) {
            $model->userCustomId = $map['UserCustomId'];
        }

        return $model;
    }
}
