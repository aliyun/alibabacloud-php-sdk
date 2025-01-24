<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeFingerPrintTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class fingerPrintTemplates extends Model
{
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var int
     */
    public $index;
    /**
     * @var string
     */
    public $loginTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
