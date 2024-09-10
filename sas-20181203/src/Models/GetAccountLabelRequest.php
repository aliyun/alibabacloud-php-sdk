<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetAccountLabelRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $labelList;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'labelList' => 'LabelList',
        'lang'      => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelList) {
            $res['LabelList'] = $this->labelList;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelList'])) {
            if (!empty($map['LabelList'])) {
                $model->labelList = $map['LabelList'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
