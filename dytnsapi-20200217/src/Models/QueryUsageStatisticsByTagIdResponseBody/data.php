<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryUsageStatisticsByTagIdResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authorizationCode;

    /**
     * @var int
     */
    public $failTotal;

    /**
     * @var string
     */
    public $gmtDateStr;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $industryName;

    /**
     * @var int
     */
    public $partnerId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var int
     */
    public $successTotal;

    /**
     * @var int
     */
    public $tagId;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'authorizationCode' => 'AuthorizationCode',
        'failTotal' => 'FailTotal',
        'gmtDateStr' => 'GmtDateStr',
        'id' => 'Id',
        'industryName' => 'IndustryName',
        'partnerId' => 'PartnerId',
        'sceneName' => 'SceneName',
        'successTotal' => 'SuccessTotal',
        'tagId' => 'TagId',
        'tagName' => 'TagName',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationCode) {
            $res['AuthorizationCode'] = $this->authorizationCode;
        }

        if (null !== $this->failTotal) {
            $res['FailTotal'] = $this->failTotal;
        }

        if (null !== $this->gmtDateStr) {
            $res['GmtDateStr'] = $this->gmtDateStr;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->industryName) {
            $res['IndustryName'] = $this->industryName;
        }

        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->successTotal) {
            $res['SuccessTotal'] = $this->successTotal;
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['AuthorizationCode'])) {
            $model->authorizationCode = $map['AuthorizationCode'];
        }

        if (isset($map['FailTotal'])) {
            $model->failTotal = $map['FailTotal'];
        }

        if (isset($map['GmtDateStr'])) {
            $model->gmtDateStr = $map['GmtDateStr'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IndustryName'])) {
            $model->industryName = $map['IndustryName'];
        }

        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['SuccessTotal'])) {
            $model->successTotal = $map['SuccessTotal'];
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
