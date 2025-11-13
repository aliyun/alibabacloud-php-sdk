<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRspDomainStatusOteRequest\addStatusList;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRspDomainStatusOteRequest\deleteStatusList;

class UpdateRspDomainStatusOteRequest extends Model
{
    /**
     * @var addStatusList[]
     */
    public $addStatusList;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var deleteStatusList[]
     */
    public $deleteStatusList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var string
     */
    public $operatorType;
    protected $_name = [
        'addStatusList' => 'AddStatusList',
        'clientToken' => 'ClientToken',
        'deleteStatusList' => 'DeleteStatusList',
        'domainName' => 'DomainName',
        'operatorId' => 'OperatorId',
        'operatorType' => 'OperatorType',
    ];

    public function validate()
    {
        if (\is_array($this->addStatusList)) {
            Model::validateArray($this->addStatusList);
        }
        if (\is_array($this->deleteStatusList)) {
            Model::validateArray($this->deleteStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addStatusList) {
            if (\is_array($this->addStatusList)) {
                $res['AddStatusList'] = [];
                $n1 = 0;
                foreach ($this->addStatusList as $item1) {
                    $res['AddStatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deleteStatusList) {
            if (\is_array($this->deleteStatusList)) {
                $res['DeleteStatusList'] = [];
                $n1 = 0;
                foreach ($this->deleteStatusList as $item1) {
                    $res['DeleteStatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }

        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
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
        if (isset($map['AddStatusList'])) {
            if (!empty($map['AddStatusList'])) {
                $model->addStatusList = [];
                $n1 = 0;
                foreach ($map['AddStatusList'] as $item1) {
                    $model->addStatusList[$n1] = addStatusList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeleteStatusList'])) {
            if (!empty($map['DeleteStatusList'])) {
                $model->deleteStatusList = [];
                $n1 = 0;
                foreach ($map['DeleteStatusList'] as $item1) {
                    $model->deleteStatusList[$n1] = deleteStatusList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }

        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        return $model;
    }
}
