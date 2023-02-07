<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetHotlineCallActionRequest extends Model
{
    /**
     * @example {"time":1}
     *
     * @var string
     */
    public $acc;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @example 1
     *
     * @var int
     */
    public $act;

    /**
     * @example {"name":123}
     *
     * @var string
     */
    public $biz;

    /**
     * @example 46c1341e-2648-447a-9b11-70b6a298d9****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example hotlinebs_out
     *
     * @var string
     */
    public $fromSource;

    /**
     * @example ccc_xp_pre-cn-***
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'acc'         => 'Acc',
        'accountName' => 'AccountName',
        'act'         => 'Act',
        'biz'         => 'Biz',
        'clientToken' => 'ClientToken',
        'fromSource'  => 'FromSource',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetHotlineCallActionRequest
     */
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
