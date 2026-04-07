<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DmsKnowledgeSearchOrderInfoDO extends Model
{
    /**
     * @var string
     */
    public $aliyunAccountUid;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $webSearchApiUrl;
    protected $_name = [
        'aliyunAccountUid' => 'AliyunAccountUid',
        'apiKey' => 'ApiKey',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'orderId' => 'OrderId',
        'webSearchApiUrl' => 'WebSearchApiUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunAccountUid) {
            $res['AliyunAccountUid'] = $this->aliyunAccountUid;
        }

        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->webSearchApiUrl) {
            $res['WebSearchApiUrl'] = $this->webSearchApiUrl;
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
        if (isset($map['AliyunAccountUid'])) {
            $model->aliyunAccountUid = $map['AliyunAccountUid'];
        }

        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['WebSearchApiUrl'])) {
            $model->webSearchApiUrl = $map['WebSearchApiUrl'];
        }

        return $model;
    }
}
