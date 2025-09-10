<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CreateAddonReleaseRequest extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var EntityDiscoverRule
     */
    public $entityRules;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $parentAddonReleaseId;

    /**
     * @var string
     */
    public $releaseName;

    /**
     * @var string
     */
    public $values;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'addonName' => 'addonName',
        'aliyunLang' => 'aliyunLang',
        'dryRun' => 'dryRun',
        'entityRules' => 'entityRules',
        'envType' => 'envType',
        'parentAddonReleaseId' => 'parentAddonReleaseId',
        'releaseName' => 'releaseName',
        'values' => 'values',
        'version' => 'version',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->entityRules) {
            $this->entityRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['addonName'] = $this->addonName;
        }

        if (null !== $this->aliyunLang) {
            $res['aliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        if (null !== $this->entityRules) {
            $res['entityRules'] = null !== $this->entityRules ? $this->entityRules->toArray($noStream) : $this->entityRules;
        }

        if (null !== $this->envType) {
            $res['envType'] = $this->envType;
        }

        if (null !== $this->parentAddonReleaseId) {
            $res['parentAddonReleaseId'] = $this->parentAddonReleaseId;
        }

        if (null !== $this->releaseName) {
            $res['releaseName'] = $this->releaseName;
        }

        if (null !== $this->values) {
            $res['values'] = $this->values;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['addonName'])) {
            $model->addonName = $map['addonName'];
        }

        if (isset($map['aliyunLang'])) {
            $model->aliyunLang = $map['aliyunLang'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['entityRules'])) {
            $model->entityRules = EntityDiscoverRule::fromMap($map['entityRules']);
        }

        if (isset($map['envType'])) {
            $model->envType = $map['envType'];
        }

        if (isset($map['parentAddonReleaseId'])) {
            $model->parentAddonReleaseId = $map['parentAddonReleaseId'];
        }

        if (isset($map['releaseName'])) {
            $model->releaseName = $map['releaseName'];
        }

        if (isset($map['values'])) {
            $model->values = $map['values'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
