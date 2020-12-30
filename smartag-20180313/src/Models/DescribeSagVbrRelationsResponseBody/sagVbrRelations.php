<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagVbrRelationsResponseBody;

use AlibabaCloud\Tea\Model;

class sagVbrRelations extends Model
{
    /**
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @var string
     */
    public $sagUid;

    /**
     * @var string
     */
    public $sagInstanceId;
    protected $_name = [
        'vbrInstanceId' => 'VbrInstanceId',
        'sagUid'        => 'SagUid',
        'sagInstanceId' => 'SagInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
        }
        if (null !== $this->sagUid) {
            $res['SagUid'] = $this->sagUid;
        }
        if (null !== $this->sagInstanceId) {
            $res['SagInstanceId'] = $this->sagInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sagVbrRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }
        if (isset($map['SagUid'])) {
            $model->sagUid = $map['SagUid'];
        }
        if (isset($map['SagInstanceId'])) {
            $model->sagInstanceId = $map['SagInstanceId'];
        }

        return $model;
    }
}
