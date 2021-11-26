<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UpdateAnycastEipAddressAssociationsRequest\popLocationAddList;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UpdateAnycastEipAddressAssociationsRequest\popLocationDeleteList;
use AlibabaCloud\Tea\Model;

class UpdateAnycastEipAddressAssociationsRequest extends Model
{
    /**
     * @var string
     */
    public $anycastId;

    /**
     * @description 关联模式，默认模式、普通模式Default/Normal
     *
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
     * @description 新增关联的pop location
     *
     * @var popLocationAddList[]
     */
    public $popLocationAddList;

    /**
     * @description 待删除的关联pop location
     *
     * @var popLocationDeleteList[]
     */
    public $popLocationDeleteList;
    protected $_name = [
        'anycastId'             => 'AnycastId',
        'associationMode'       => 'AssociationMode',
        'bindInstanceId'        => 'BindInstanceId',
        'clientToken'           => 'ClientToken',
        'dryRun'                => 'DryRun',
        'popLocationAddList'    => 'PopLocationAddList',
        'popLocationDeleteList' => 'PopLocationDeleteList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['PopLocationAddList'] = [];
            if (null !== $this->popLocationAddList && \is_array($this->popLocationAddList)) {
                $n = 0;
                foreach ($this->popLocationAddList as $item) {
                    $res['PopLocationAddList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->popLocationDeleteList) {
            $res['PopLocationDeleteList'] = [];
            if (null !== $this->popLocationDeleteList && \is_array($this->popLocationDeleteList)) {
                $n = 0;
                foreach ($this->popLocationDeleteList as $item) {
                    $res['PopLocationDeleteList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAnycastEipAddressAssociationsRequest
     */
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
                $n                         = 0;
                foreach ($map['PopLocationAddList'] as $item) {
                    $model->popLocationAddList[$n++] = null !== $item ? popLocationAddList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PopLocationDeleteList'])) {
            if (!empty($map['PopLocationDeleteList'])) {
                $model->popLocationDeleteList = [];
                $n                            = 0;
                foreach ($map['PopLocationDeleteList'] as $item) {
                    $model->popLocationDeleteList[$n++] = null !== $item ? popLocationDeleteList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
