<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class CompanyListByConditionRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var bool
     */
    public $customSeeSelf;

    /**
     * @var string
     */
    public $isvType;

    /**
     * @var string
     */
    public $supportType;
    protected $_name = [
        'aliyunJwt'     => 'AliyunJwt',
        'customSeeSelf' => 'CustomSeeSelf',
        'isvType'       => 'IsvType',
        'supportType'   => 'SupportType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->customSeeSelf) {
            $res['CustomSeeSelf'] = $this->customSeeSelf;
        }
        if (null !== $this->isvType) {
            $res['IsvType'] = $this->isvType;
        }
        if (null !== $this->supportType) {
            $res['SupportType'] = $this->supportType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompanyListByConditionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['CustomSeeSelf'])) {
            $model->customSeeSelf = $map['CustomSeeSelf'];
        }
        if (isset($map['IsvType'])) {
            $model->isvType = $map['IsvType'];
        }
        if (isset($map['SupportType'])) {
            $model->supportType = $map['SupportType'];
        }

        return $model;
    }
}
