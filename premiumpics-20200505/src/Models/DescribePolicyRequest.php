<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class DescribePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $fileType;
    protected $_name = [
        'bizType'  => 'BizType',
        'fileType' => 'FileType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        return $model;
    }
}
