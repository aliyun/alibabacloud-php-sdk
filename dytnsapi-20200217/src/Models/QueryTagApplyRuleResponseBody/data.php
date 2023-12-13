<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagApplyRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The requirements for application materials.
     *
     * @example Requirements for application materials
     *
     * @var string
     */
    public $applyMaterialDesc;

    /**
     * @description Indicates whether the application is automatically approved.
     *
     * @example 16
     *
     * @var int
     */
    public $autoAudit;

    /**
     * @description The URL for the billing documentation.
     *
     * @example aliyundoc.com
     *
     * @var string
     */
    public $chargingStandardLink;

    /**
     * @description indicates whether encrypted queries are supported.
     *
     * @example 99
     *
     * @var int
     */
    public $encryptedQuery;

    /**
     * @description Indicates whether application materials are required.
     *
     * @example 46
     *
     * @var int
     */
    public $needApplyMaterial;

    /**
     * @description The URL for the service agreement.
     *
     * @example example.aliyundoc.com
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
