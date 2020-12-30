<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeSecurityGroupAttributeResponseBody\securityGroupAttributeList;

use AlibabaCloud\Tea\Model;

class securityGroupAttribute extends Model
{
    /**
     * @var string
     */
    public $bizContent;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'bizContent' => 'BizContent',
        'bizType'    => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizContent) {
            $res['BizContent'] = $this->bizContent;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizContent'])) {
            $model->bizContent = $map['BizContent'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
