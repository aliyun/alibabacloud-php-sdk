<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryCredentialsInfoRequest extends Model
{
    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $materialType;

    /**
     * @var string
     */
    public $ossKey;
    protected $_name = [
        'companyName'  => 'CompanyName',
        'materialType' => 'MaterialType',
        'ossKey'       => 'OssKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->materialType) {
            $res['MaterialType'] = $this->materialType;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCredentialsInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['MaterialType'])) {
            $model->materialType = $map['MaterialType'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        return $model;
    }
}
