<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ListCrossBorderPackageForComplianceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var int
     */
    public $resourceUid;

    /**
     * @var bool
     */
    public $isBinded;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResult;
    protected $_name = [
        'regionId'    => 'RegionId',
        'clientToken' => 'ClientToken',
        'dryRun'      => 'DryRun',
        'resourceUid' => 'ResourceUid',
        'isBinded'    => 'IsBinded',
        'nextToken'   => 'NextToken',
        'maxResult'   => 'MaxResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->resourceUid) {
            $res['ResourceUid'] = $this->resourceUid;
        }
        if (null !== $this->isBinded) {
            $res['IsBinded'] = $this->isBinded;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResult) {
            $res['MaxResult'] = $this->maxResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCrossBorderPackageForComplianceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ResourceUid'])) {
            $model->resourceUid = $map['ResourceUid'];
        }
        if (isset($map['IsBinded'])) {
            $model->isBinded = $map['IsBinded'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResult'])) {
            $model->maxResult = $map['MaxResult'];
        }

        return $model;
    }
}
