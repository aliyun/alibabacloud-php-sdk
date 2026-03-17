<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagVbrRelationsResponseBody;

use AlibabaCloud\Dara\Model;

class sagVbrRelations extends Model
{
    /**
     * @var string
     */
    public $sagInstanceId;

    /**
     * @var string
     */
    public $sagUid;

    /**
     * @var string
     */
    public $vbrInstanceId;
    protected $_name = [
        'sagInstanceId' => 'SagInstanceId',
        'sagUid' => 'SagUid',
        'vbrInstanceId' => 'VbrInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sagInstanceId) {
            $res['SagInstanceId'] = $this->sagInstanceId;
        }

        if (null !== $this->sagUid) {
            $res['SagUid'] = $this->sagUid;
        }

        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
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
        if (isset($map['SagInstanceId'])) {
            $model->sagInstanceId = $map['SagInstanceId'];
        }

        if (isset($map['SagUid'])) {
            $model->sagUid = $map['SagUid'];
        }

        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }

        return $model;
    }
}
