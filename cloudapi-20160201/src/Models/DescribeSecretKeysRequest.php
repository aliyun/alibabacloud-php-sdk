<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class DescribeSecretKeysRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $secretKeyId;

    /**
     * @var string
     */
    public $secretKeyName;
    protected $_name = [
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'secretKeyId'   => 'SecretKeyId',
        'secretKeyName' => 'SecretKeyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->secretKeyId) {
            $res['SecretKeyId'] = $this->secretKeyId;
        }
        if (null !== $this->secretKeyName) {
            $res['SecretKeyName'] = $this->secretKeyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecretKeysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecretKeyId'])) {
            $model->secretKeyId = $map['SecretKeyId'];
        }
        if (isset($map['SecretKeyName'])) {
            $model->secretKeyName = $map['SecretKeyName'];
        }

        return $model;
    }
}
