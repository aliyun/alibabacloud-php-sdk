<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class GetHotlineCallActionRequest extends Model
{
    /**
     * @var string
     */
    public $acc;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var int
     */
    public $act;

    /**
     * @var string
     */
    public $biz;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $fromSource;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'acc' => 'Acc',
        'accountName' => 'AccountName',
        'act' => 'Act',
        'biz' => 'Biz',
        'clientToken' => 'ClientToken',
        'fromSource' => 'FromSource',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }

        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->act) {
            $res['Act'] = $this->act;
        }

        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->fromSource) {
            $res['FromSource'] = $this->fromSource;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }

        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['Act'])) {
            $model->act = $map['Act'];
        }

        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['FromSource'])) {
            $model->fromSource = $map['FromSource'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
