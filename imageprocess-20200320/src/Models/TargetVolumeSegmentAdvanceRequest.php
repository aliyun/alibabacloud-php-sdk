<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\TargetVolumeSegmentAdvanceRequest\URLList;
use AlibabaCloud\Tea\Model;

class TargetVolumeSegmentAdvanceRequest extends Model
{
    /**
     * @example LUNG
     *
     * @var string
     */
    public $cancerType;

    /**
     * @example DICOM
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @example 1
     *
     * @var string
     */
    public $orgId;

    /**
     * @example 1
     *
     * @var string
     */
    public $orgName;

    /**
     * @example GTV
     *
     * @var string
     */
    public $targetVolumeType;

    /**
     * @var URLList[]
     */
    public $URLList;
    protected $_name = [
        'cancerType'       => 'CancerType',
        'dataFormat'       => 'DataFormat',
        'orgId'            => 'OrgId',
        'orgName'          => 'OrgName',
        'targetVolumeType' => 'TargetVolumeType',
        'URLList'          => 'URLList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancerType) {
            $res['CancerType'] = $this->cancerType;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->targetVolumeType) {
            $res['TargetVolumeType'] = $this->targetVolumeType;
        }
        if (null !== $this->URLList) {
            $res['URLList'] = [];
            if (null !== $this->URLList && \is_array($this->URLList)) {
                $n = 0;
                foreach ($this->URLList as $item) {
                    $res['URLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TargetVolumeSegmentAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CancerType'])) {
            $model->cancerType = $map['CancerType'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['TargetVolumeType'])) {
            $model->targetVolumeType = $map['TargetVolumeType'];
        }
        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n              = 0;
                foreach ($map['URLList'] as $item) {
                    $model->URLList[$n++] = null !== $item ? URLList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
