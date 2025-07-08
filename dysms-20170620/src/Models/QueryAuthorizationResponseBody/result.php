<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryAuthorizationResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $authorizeCode;

    /**
     * @var bool
     */
    public $authorizeStatus;

    /**
     * @var string
     */
    public $authorizeTime;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $unAuthorizeTime;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'authorizeCode' => 'AuthorizeCode',
        'authorizeStatus' => 'AuthorizeStatus',
        'authorizeTime' => 'AuthorizeTime',
        'productCode' => 'ProductCode',
        'unAuthorizeTime' => 'UnAuthorizeTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->authorizeCode) {
            $res['AuthorizeCode'] = $this->authorizeCode;
        }

        if (null !== $this->authorizeStatus) {
            $res['AuthorizeStatus'] = $this->authorizeStatus;
        }

        if (null !== $this->authorizeTime) {
            $res['AuthorizeTime'] = $this->authorizeTime;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->unAuthorizeTime) {
            $res['UnAuthorizeTime'] = $this->unAuthorizeTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['AuthorizeCode'])) {
            $model->authorizeCode = $map['AuthorizeCode'];
        }

        if (isset($map['AuthorizeStatus'])) {
            $model->authorizeStatus = $map['AuthorizeStatus'];
        }

        if (isset($map['AuthorizeTime'])) {
            $model->authorizeTime = $map['AuthorizeTime'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['UnAuthorizeTime'])) {
            $model->unAuthorizeTime = $map['UnAuthorizeTime'];
        }

        return $model;
    }
}
