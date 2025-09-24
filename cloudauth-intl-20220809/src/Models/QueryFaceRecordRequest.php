<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class QueryFaceRecordRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $faceGroupCode;

    /**
     * @var string
     */
    public $faceId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $merchantUserId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $registrationType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'faceGroupCode' => 'FaceGroupCode',
        'faceId' => 'FaceId',
        'maxResults' => 'MaxResults',
        'merchantUserId' => 'MerchantUserId',
        'nextToken' => 'NextToken',
        'pageSize' => 'PageSize',
        'registrationType' => 'RegistrationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->faceGroupCode) {
            $res['FaceGroupCode'] = $this->faceGroupCode;
        }

        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->registrationType) {
            $res['RegistrationType'] = $this->registrationType;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['FaceGroupCode'])) {
            $model->faceGroupCode = $map['FaceGroupCode'];
        }

        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegistrationType'])) {
            $model->registrationType = $map['RegistrationType'];
        }

        return $model;
    }
}
