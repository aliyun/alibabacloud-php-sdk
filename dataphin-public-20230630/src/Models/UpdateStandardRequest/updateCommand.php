<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardRequest\updateCommand\effectiveTimeConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardRequest\updateCommand\standardGeneralMonitorConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardRequest\updateCommand\standardSetReference;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardRequest\updateCommand\standardTemplateReference;

class updateCommand extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var effectiveTimeConfig
     */
    public $effectiveTimeConfig;

    /**
     * @var bool
     */
    public $needGenerateStandardCode;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var standardGeneralMonitorConfig
     */
    public $standardGeneralMonitorConfig;

    /**
     * @var int
     */
    public $standardId;

    /**
     * @var standardSetReference
     */
    public $standardSetReference;

    /**
     * @var string
     */
    public $standardStatus;

    /**
     * @var standardTemplateReference
     */
    public $standardTemplateReference;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'description' => 'Description',
        'effectiveTimeConfig' => 'EffectiveTimeConfig',
        'needGenerateStandardCode' => 'NeedGenerateStandardCode',
        'owner' => 'Owner',
        'standardGeneralMonitorConfig' => 'StandardGeneralMonitorConfig',
        'standardId' => 'StandardId',
        'standardSetReference' => 'StandardSetReference',
        'standardStatus' => 'StandardStatus',
        'standardTemplateReference' => 'StandardTemplateReference',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->effectiveTimeConfig) {
            $this->effectiveTimeConfig->validate();
        }
        if (null !== $this->standardGeneralMonitorConfig) {
            $this->standardGeneralMonitorConfig->validate();
        }
        if (null !== $this->standardSetReference) {
            $this->standardSetReference->validate();
        }
        if (null !== $this->standardTemplateReference) {
            $this->standardTemplateReference->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->effectiveTimeConfig) {
            $res['EffectiveTimeConfig'] = null !== $this->effectiveTimeConfig ? $this->effectiveTimeConfig->toArray($noStream) : $this->effectiveTimeConfig;
        }

        if (null !== $this->needGenerateStandardCode) {
            $res['NeedGenerateStandardCode'] = $this->needGenerateStandardCode;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->standardGeneralMonitorConfig) {
            $res['StandardGeneralMonitorConfig'] = null !== $this->standardGeneralMonitorConfig ? $this->standardGeneralMonitorConfig->toArray($noStream) : $this->standardGeneralMonitorConfig;
        }

        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }

        if (null !== $this->standardSetReference) {
            $res['StandardSetReference'] = null !== $this->standardSetReference ? $this->standardSetReference->toArray($noStream) : $this->standardSetReference;
        }

        if (null !== $this->standardStatus) {
            $res['StandardStatus'] = $this->standardStatus;
        }

        if (null !== $this->standardTemplateReference) {
            $res['StandardTemplateReference'] = null !== $this->standardTemplateReference ? $this->standardTemplateReference->toArray($noStream) : $this->standardTemplateReference;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EffectiveTimeConfig'])) {
            $model->effectiveTimeConfig = effectiveTimeConfig::fromMap($map['EffectiveTimeConfig']);
        }

        if (isset($map['NeedGenerateStandardCode'])) {
            $model->needGenerateStandardCode = $map['NeedGenerateStandardCode'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['StandardGeneralMonitorConfig'])) {
            $model->standardGeneralMonitorConfig = standardGeneralMonitorConfig::fromMap($map['StandardGeneralMonitorConfig']);
        }

        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }

        if (isset($map['StandardSetReference'])) {
            $model->standardSetReference = standardSetReference::fromMap($map['StandardSetReference']);
        }

        if (isset($map['StandardStatus'])) {
            $model->standardStatus = $map['StandardStatus'];
        }

        if (isset($map['StandardTemplateReference'])) {
            $model->standardTemplateReference = standardTemplateReference::fromMap($map['StandardTemplateReference']);
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
