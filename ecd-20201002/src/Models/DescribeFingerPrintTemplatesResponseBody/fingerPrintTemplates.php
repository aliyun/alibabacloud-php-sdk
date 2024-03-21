<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeFingerPrintTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class fingerPrintTemplates extends Model
{
    /**
     * @example 2258a3d5-b8f8-4d79-a221-eaecf211****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 2022-03-13T13:26:29Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example Finger 1
     *
     * @var string
     */
    public $description;

    /**
     * @example liming
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @example 2022-03-13T13:26:29Z
     *
     * @var string
     */
    public $loginTime;

    /**
     * @example cn-hangzhou+dir-074949****
     *
     * @var string
     */
    public $officeSiteId;
    protected $_name = [
        'clientId'     => 'ClientId',
        'creationTime' => 'CreationTime',
        'description'  => 'Description',
        'endUserId'    => 'EndUserId',
        'index'        => 'Index',
        'loginTime'    => 'LoginTime',
        'officeSiteId' => 'OfficeSiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->loginTime) {
            $res['LoginTime'] = $this->loginTime;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fingerPrintTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['LoginTime'])) {
            $model->loginTime = $map['LoginTime'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        return $model;
    }
}
