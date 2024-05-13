<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\SDK\CCC\V20200701\Models\AddCasesRequest\caseList;
use AlibabaCloud\Tea\Model;

class AddCasesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example c58b9719-3bc3-441d-a4d3-fc0309ef7066
     *
     * @var string
     */
    public $campaignId;

    /**
     * @var caseList[]
     */
    public $caseList;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'campaignId' => 'CampaignId',
        'caseList'   => 'CaseList',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->caseList) {
            $res['CaseList'] = [];
            if (null !== $this->caseList && \is_array($this->caseList)) {
                $n = 0;
                foreach ($this->caseList as $item) {
                    $res['CaseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }
        if (isset($map['CaseList'])) {
            if (!empty($map['CaseList'])) {
                $model->caseList = [];
                $n               = 0;
                foreach ($map['CaseList'] as $item) {
                    $model->caseList[$n++] = null !== $item ? caseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
