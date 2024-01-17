<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class CopyConsumerOpenForInnerRequest extends Model
{
    /**
     * @var string
     */
    public $copyList;
    protected $_name = [
        'copyList' => 'CopyList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->copyList) {
            $res['CopyList'] = $this->copyList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyConsumerOpenForInnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CopyList'])) {
            $model->copyList = $map['CopyList'];
        }

        return $model;
    }
}
