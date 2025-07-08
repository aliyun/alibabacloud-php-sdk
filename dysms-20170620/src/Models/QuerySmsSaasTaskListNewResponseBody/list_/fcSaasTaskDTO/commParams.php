<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskListNewResponseBody\list_\fcSaasTaskDTO;

use AlibabaCloud\Dara\Model;

class commParams extends Model
{
    /**
     * @var int
     */
    public $aliyunUid;

    /**
     * @var int
     */
    public $custId;

    /**
     * @var int
     */
    public $cycleNum;

    /**
     * @var int
     */
    public $partnerId;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'custId' => 'CustId',
        'cycleNum' => 'CycleNum',
        'partnerId' => 'PartnerId',
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

        if (null !== $this->custId) {
            $res['CustId'] = $this->custId;
        }

        if (null !== $this->cycleNum) {
            $res['CycleNum'] = $this->cycleNum;
        }

        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
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

        if (isset($map['CustId'])) {
            $model->custId = $map['CustId'];
        }

        if (isset($map['CycleNum'])) {
            $model->cycleNum = $map['CycleNum'];
        }

        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }

        return $model;
    }
}
