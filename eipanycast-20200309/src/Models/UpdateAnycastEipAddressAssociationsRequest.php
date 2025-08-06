<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UpdateAnycastEipAddressAssociationsRequest\popLocationAddList;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UpdateAnycastEipAddressAssociationsRequest\popLocationDeleteList;

class UpdateAnycastEipAddressAssociationsRequest extends Model
{
    /**
     * @var string
     */
    public $anycastId;

    /**
     * @var string
     */
    public $associationMode;

    /**
     * @var string
     */
    public $bindInstanceId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var popLocationAddList[]
     */
    public $popLocationAddList;

    /**
     * @var popLocationDeleteList[]
     */
    public $popLocationDeleteList;
    protected $_name = [
        'anycastId' => 'AnycastId',
        'associationMode' => 'AssociationMode',
        'bindInstanceId' => 'BindInstanceId',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'popLocationAddList' => 'PopLocationAddList',
        'popLocationDeleteList' => 'PopLocationDeleteList',
    ];

    public function validate()
    {
        if (\is_array($this->popLocationAddList)) {
            Model::validateArray($this->popLocationAddList);
        }
        if (\is_array($this->popLocationDeleteList)) {
            Model::validateArray($this->popLocationDeleteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }

        if (null !== $this->associationMode) {
            $res['AssociationMode'] = $this->associationMode;
        }

        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->popLocationAddList) {
            if (\is_array($this->popLocationAddList)) {
                $res['PopLocationAddList'] = [];
                $n1 = 0;
                foreach ($this->popLocationAddList as $item1) {
                    $res['PopLocationAddList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->popLocationDeleteList) {
            if (\is_array($this->popLocationDeleteList)) {
                $res['PopLocationDeleteList'] = [];
                $n1 = 0;
                foreach ($this->popLocationDeleteList as $item1) {
                    $res['PopLocationDeleteList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }

        if (isset($map['AssociationMode'])) {
            $model->associationMode = $map['AssociationMode'];
        }

        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['PopLocationAddList'])) {
            if (!empty($map['PopLocationAddList'])) {
                $model->popLocationAddList = [];
                $n1 = 0;
                foreach ($map['PopLocationAddList'] as $item1) {
                    $model->popLocationAddList[$n1] = popLocationAddList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PopLocationDeleteList'])) {
            if (!empty($map['PopLocationDeleteList'])) {
                $model->popLocationDeleteList = [];
                $n1 = 0;
                foreach ($map['PopLocationDeleteList'] as $item1) {
                    $model->popLocationDeleteList[$n1] = popLocationDeleteList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
