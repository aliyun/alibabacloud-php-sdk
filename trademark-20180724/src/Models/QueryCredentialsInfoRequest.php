<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryCredentialsInfoRequest extends Model
{
    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $materialType;

    /**
     * @var string
     */
    public $companyName;
    protected $_name = [
        'ossKey'       => 'OssKey',
        'materialType' => 'MaterialType',
        'companyName'  => 'CompanyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->materialType) {
            $res['MaterialType'] = $this->materialType;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
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
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['MaterialType'])) {
            $model->materialType = $map['MaterialType'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        return $model;
    }
}
