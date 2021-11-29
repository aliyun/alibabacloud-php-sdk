<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetHttpErrorPageConfigRequest extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pageUrl;
    protected $_name = [
        'configId'   => 'ConfigId',
        'domainName' => 'DomainName',
        'errorCode'  => 'ErrorCode',
        'ownerId'    => 'OwnerId',
        'pageUrl'    => 'PageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageUrl) {
            $res['PageUrl'] = $this->pageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetHttpErrorPageConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageUrl'])) {
            $model->pageUrl = $map['PageUrl'];
        }

        return $model;
    }
}
