<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CopyCompliancePacksRequest extends Model
{
    /**
     * @description The IDs of the destination account groups into which the compliance packages are replicated. Separate multiple account group IDs with commas (,).
     *
     * > If this parameter is left empty, the compliance packages are replicated to the current account group.
     * @example ca-c73c626622af00f8****
     *
     * @var string
     */
    public $desAggregatorIds;

    /**
     * @description The ID of the account group to which the compliance packages belong.
     *
     * For more information about how to obtain the ID of an account group, see [ListAggregators](~~255797~~).
     * @example ca-05e6626622af0050****
     *
     * @var string
     */
    public $srcAggregatorId;

    /**
     * @description The IDs of the compliance packages. Separate multiple compliance package IDs with commas (,).
     *
     * For more information about how to obtain the ID of a compliance package, see [ListCompliancePacks](~~263332~~).
     * @example cp-4c02626622af0050****,cp-47c1626622af0050****
     *
     * @var string
     */
    public $srcCompliancePackIds;
    protected $_name = [
        'desAggregatorIds'     => 'DesAggregatorIds',
        'srcAggregatorId'      => 'SrcAggregatorId',
        'srcCompliancePackIds' => 'SrcCompliancePackIds',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CopyCompliancePacksRequest
     */
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
