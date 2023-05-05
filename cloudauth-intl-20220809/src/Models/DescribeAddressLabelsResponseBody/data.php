<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeAddressLabelsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $labelList;
    protected $_name = [
        'labelList' => 'LabelList',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelList'])) {
            if (!empty($map['LabelList'])) {
                $model->labelList = $map['LabelList'];
            }
        }

        return $model;
    }
}
