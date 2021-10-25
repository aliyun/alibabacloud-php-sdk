<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateSlotResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $mediaName;

    /**
     * @var string
     */
    public $adSlotType;

    /**
     * @var string
     */
    public $adSlotStatus;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $adSlotName;

    /**
     * @var string
     */
    public $inspireScene;

    /**
     * @var string
     */
    public $blockingRule;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $adSlotId;

    /**
     * @var string
     */
    public $adSlotCorporateStatus;

    /**
     * @var string
     */
    public $adSlotTemplateId;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'mediaName'             => 'MediaName',
        'adSlotType'            => 'AdSlotType',
        'adSlotStatus'          => 'AdSlotStatus',
        'mediaId'               => 'MediaId',
        'extInfo'               => 'ExtInfo',
        'adSlotName'            => 'AdSlotName',
        'inspireScene'          => 'InspireScene',
        'blockingRule'          => 'BlockingRule',
        'version'               => 'Version',
        'adSlotId'              => 'AdSlotId',
        'adSlotCorporateStatus' => 'AdSlotCorporateStatus',
        'adSlotTemplateId'      => 'AdSlotTemplateId',
        'modifyTime'            => 'ModifyTime',
        'tenantId'              => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->mediaName) {
            $res['MediaName'] = $this->mediaName;
        }
        if (null !== $this->adSlotType) {
            $res['AdSlotType'] = $this->adSlotType;
        }
        if (null !== $this->adSlotStatus) {
            $res['AdSlotStatus'] = $this->adSlotStatus;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->adSlotName) {
            $res['AdSlotName'] = $this->adSlotName;
        }
        if (null !== $this->inspireScene) {
            $res['InspireScene'] = $this->inspireScene;
        }
        if (null !== $this->blockingRule) {
            $res['BlockingRule'] = $this->blockingRule;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->adSlotId) {
            $res['AdSlotId'] = $this->adSlotId;
        }
        if (null !== $this->adSlotCorporateStatus) {
            $res['AdSlotCorporateStatus'] = $this->adSlotCorporateStatus;
        }
        if (null !== $this->adSlotTemplateId) {
            $res['AdSlotTemplateId'] = $this->adSlotTemplateId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MediaName'])) {
            $model->mediaName = $map['MediaName'];
        }
        if (isset($map['AdSlotType'])) {
            $model->adSlotType = $map['AdSlotType'];
        }
        if (isset($map['AdSlotStatus'])) {
            $model->adSlotStatus = $map['AdSlotStatus'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['AdSlotName'])) {
            $model->adSlotName = $map['AdSlotName'];
        }
        if (isset($map['InspireScene'])) {
            $model->inspireScene = $map['InspireScene'];
        }
        if (isset($map['BlockingRule'])) {
            $model->blockingRule = $map['BlockingRule'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['AdSlotId'])) {
            $model->adSlotId = $map['AdSlotId'];
        }
        if (isset($map['AdSlotCorporateStatus'])) {
            $model->adSlotCorporateStatus = $map['AdSlotCorporateStatus'];
        }
        if (isset($map['AdSlotTemplateId'])) {
            $model->adSlotTemplateId = $map['AdSlotTemplateId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
