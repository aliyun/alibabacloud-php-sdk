<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class CopyCompliancePacksRequest extends Model
{
    /**
     * @var string
     */
    public $desAggregatorIds;

    /**
     * @var string
     */
    public $srcAggregatorId;

    /**
     * @var string
     */
    public $srcCompliancePackIds;
    protected $_name = [
        'desAggregatorIds' => 'DesAggregatorIds',
        'srcAggregatorId' => 'SrcAggregatorId',
        'srcCompliancePackIds' => 'SrcCompliancePackIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desAggregatorIds) {
            $res['DesAggregatorIds'] = $this->desAggregatorIds;
        }

        if (null !== $this->srcAggregatorId) {
            $res['SrcAggregatorId'] = $this->srcAggregatorId;
        }

        if (null !== $this->srcCompliancePackIds) {
            $res['SrcCompliancePackIds'] = $this->srcCompliancePackIds;
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
        if (isset($map['DesAggregatorIds'])) {
            $model->desAggregatorIds = $map['DesAggregatorIds'];
        }

        if (isset($map['SrcAggregatorId'])) {
            $model->srcAggregatorId = $map['SrcAggregatorId'];
        }

        if (isset($map['SrcCompliancePackIds'])) {
            $model->srcCompliancePackIds = $map['SrcCompliancePackIds'];
        }

        return $model;
    }
}
