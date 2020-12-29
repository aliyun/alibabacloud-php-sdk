<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ImportCustomAlertRulesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $contactGroupIds;

    /**
     * @var bool
     */
    public $isAutoStart;

    /**
     * @var string
     */
    public $templateAlertConfig;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var string
     */
    public $templageAlertConfig;
    protected $_name = [
        'regionId'            => 'RegionId',
        'contactGroupIds'     => 'ContactGroupIds',
        'isAutoStart'         => 'IsAutoStart',
        'templateAlertConfig' => 'TemplateAlertConfig',
        'proxyUserId'         => 'ProxyUserId',
        'templageAlertConfig' => 'TemplageAlertConfig',
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
        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }
        if (null !== $this->isAutoStart) {
            $res['IsAutoStart'] = $this->isAutoStart;
        }
        if (null !== $this->templateAlertConfig) {
            $res['TemplateAlertConfig'] = $this->templateAlertConfig;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->templageAlertConfig) {
            $res['TemplageAlertConfig'] = $this->templageAlertConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportCustomAlertRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }
        if (isset($map['IsAutoStart'])) {
            $model->isAutoStart = $map['IsAutoStart'];
        }
        if (isset($map['TemplateAlertConfig'])) {
            $model->templateAlertConfig = $map['TemplateAlertConfig'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['TemplageAlertConfig'])) {
            $model->templageAlertConfig = $map['TemplageAlertConfig'];
        }

        return $model;
    }
}
