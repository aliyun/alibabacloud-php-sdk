<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponseBody\docInfo;

use AlibabaCloud\Dara\Model;

class docParas extends Model
{
    /**
     * @var int
     */
    public $paraLevel;

    /**
     * @var int
     */
    public $paraNo;

    /**
     * @var string
     */
    public $paraText;

    /**
     * @var string
     */
    public $paraType;
    protected $_name = [
        'paraLevel' => 'ParaLevel',
        'paraNo' => 'ParaNo',
        'paraText' => 'ParaText',
        'paraType' => 'ParaType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paraLevel) {
            $res['ParaLevel'] = $this->paraLevel;
        }

        if (null !== $this->paraNo) {
            $res['ParaNo'] = $this->paraNo;
        }

        if (null !== $this->paraText) {
            $res['ParaText'] = $this->paraText;
        }

        if (null !== $this->paraType) {
            $res['ParaType'] = $this->paraType;
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
        if (isset($map['ParaLevel'])) {
            $model->paraLevel = $map['ParaLevel'];
        }

        if (isset($map['ParaNo'])) {
            $model->paraNo = $map['ParaNo'];
        }

        if (isset($map['ParaText'])) {
            $model->paraText = $map['ParaText'];
        }

        if (isset($map['ParaType'])) {
            $model->paraType = $map['ParaType'];
        }

        return $model;
    }
}
