<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class CompanyAndMainUserCreateRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var string
     */
    public $companyParams;

    /**
     * @var string
     */
    public $userParams;
    protected $_name = [
        'aliyunJwt'     => 'AliyunJwt',
        'companyParams' => 'CompanyParams',
        'userParams'    => 'UserParams',
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
        if (null !== $this->companyParams) {
            $res['CompanyParams'] = $this->companyParams;
        }
        if (null !== $this->userParams) {
            $res['UserParams'] = $this->userParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompanyAndMainUserCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['CompanyParams'])) {
            $model->companyParams = $map['CompanyParams'];
        }
        if (isset($map['UserParams'])) {
            $model->userParams = $map['UserParams'];
        }

        return $model;
    }
}
