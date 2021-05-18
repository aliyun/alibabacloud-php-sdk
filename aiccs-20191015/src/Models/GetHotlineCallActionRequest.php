<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetHotlineCallActionRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;

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
    public $fromSource;

    /**
     * @var string
     */
    public $biz;

    /**
     * @var string
     */
    public $acc;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'instanceId'  => 'InstanceId',
        'accountName' => 'AccountName',
        'act'         => 'Act',
        'fromSource'  => 'FromSource',
        'biz'         => 'Biz',
        'acc'         => 'Acc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->act) {
            $res['Act'] = $this->act;
        }
        if (null !== $this->fromSource) {
            $res['FromSource'] = $this->fromSource;
        }
        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotlineCallActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Act'])) {
            $model->act = $map['Act'];
        }
        if (isset($map['FromSource'])) {
            $model->fromSource = $map['FromSource'];
        }
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }

        return $model;
    }
}
