<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagApplyRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 申请材料要求
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $applyMaterialDesc;

    /**
     * @description 是否自动审批
     *
     * @example 16
     *
     * @var int
     */
    public $autoAudit;

    /**
     * @description 计费标准说明链接
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $chargingStandardLink;

    /**
     * @description 是否支持加密查询
     *
     * @example 99
     *
     * @var int
     */
    public $encryptedQuery;

    /**
     * @description 是否需要提供申请材料
     *
     * @example 46
     *
     * @var int
     */
    public $needApplyMaterial;

    /**
     * @description 服务协议链接
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $slaLink;
    protected $_name = [
        'applyMaterialDesc'    => 'ApplyMaterialDesc',
        'autoAudit'            => 'AutoAudit',
        'chargingStandardLink' => 'ChargingStandardLink',
        'encryptedQuery'       => 'EncryptedQuery',
        'needApplyMaterial'    => 'NeedApplyMaterial',
        'slaLink'              => 'SlaLink',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyMaterialDesc) {
            $res['ApplyMaterialDesc'] = $this->applyMaterialDesc;
        }
        if (null !== $this->autoAudit) {
            $res['AutoAudit'] = $this->autoAudit;
        }
        if (null !== $this->chargingStandardLink) {
            $res['ChargingStandardLink'] = $this->chargingStandardLink;
        }
        if (null !== $this->encryptedQuery) {
            $res['EncryptedQuery'] = $this->encryptedQuery;
        }
        if (null !== $this->needApplyMaterial) {
            $res['NeedApplyMaterial'] = $this->needApplyMaterial;
        }
        if (null !== $this->slaLink) {
            $res['SlaLink'] = $this->slaLink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyMaterialDesc'])) {
            $model->applyMaterialDesc = $map['ApplyMaterialDesc'];
        }
        if (isset($map['AutoAudit'])) {
            $model->autoAudit = $map['AutoAudit'];
        }
        if (isset($map['ChargingStandardLink'])) {
            $model->chargingStandardLink = $map['ChargingStandardLink'];
        }
        if (isset($map['EncryptedQuery'])) {
            $model->encryptedQuery = $map['EncryptedQuery'];
        }
        if (isset($map['NeedApplyMaterial'])) {
            $model->needApplyMaterial = $map['NeedApplyMaterial'];
        }
        if (isset($map['SlaLink'])) {
            $model->slaLink = $map['SlaLink'];
        }

        return $model;
    }
}
