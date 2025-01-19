<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagApplyRuleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $applyMaterialDesc;
    /**
     * @var int
     */
    public $autoAudit;
    /**
     * @var string
     */
    public $chargingStandardLink;
    /**
     * @var int
     */
    public $encryptedQuery;
    /**
     * @var int
     */
    public $needApplyMaterial;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
