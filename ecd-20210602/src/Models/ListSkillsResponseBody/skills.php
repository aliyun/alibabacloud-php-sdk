<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602\Models\ListSkillsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20210602\Models\ListSkillsResponseBody\skills\skillVersions;

class skills extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $defaultVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string[]
     */
    public $envVars;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $skillIconUrl;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var skillVersions[]
     */
    public $skillVersions;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $sourceMarket;

    /**
     * @var string
     */
    public $sourceMarketName;

    /**
     * @var string
     */
    public $supplierType;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'author' => 'Author',
        'defaultVersion' => 'DefaultVersion',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'enable' => 'Enable',
        'envVars' => 'EnvVars',
        'gmtCreated' => 'GmtCreated',
        'skillIconUrl' => 'SkillIconUrl',
        'skillId' => 'SkillId',
        'skillName' => 'SkillName',
        'skillVersions' => 'SkillVersions',
        'slug' => 'Slug',
        'sourceMarket' => 'SourceMarket',
        'sourceMarketName' => 'SourceMarketName',
        'supplierType' => 'SupplierType',
    ];

    public function validate()
    {
        if (\is_array($this->envVars)) {
            Model::validateArray($this->envVars);
        }
        if (\is_array($this->skillVersions)) {
            Model::validateArray($this->skillVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }

        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->envVars) {
            if (\is_array($this->envVars)) {
                $res['EnvVars'] = [];
                foreach ($this->envVars as $key1 => $value1) {
                    $res['EnvVars'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->skillIconUrl) {
            $res['SkillIconUrl'] = $this->skillIconUrl;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillVersions) {
            if (\is_array($this->skillVersions)) {
                $res['SkillVersions'] = [];
                $n1 = 0;
                foreach ($this->skillVersions as $item1) {
                    $res['SkillVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->slug) {
            $res['Slug'] = $this->slug;
        }

        if (null !== $this->sourceMarket) {
            $res['SourceMarket'] = $this->sourceMarket;
        }

        if (null !== $this->sourceMarketName) {
            $res['SourceMarketName'] = $this->sourceMarketName;
        }

        if (null !== $this->supplierType) {
            $res['SupplierType'] = $this->supplierType;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }

        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EnvVars'])) {
            if (!empty($map['EnvVars'])) {
                $model->envVars = [];
                foreach ($map['EnvVars'] as $key1 => $value1) {
                    $model->envVars[$key1] = $value1;
                }
            }
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['SkillIconUrl'])) {
            $model->skillIconUrl = $map['SkillIconUrl'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillVersions'])) {
            if (!empty($map['SkillVersions'])) {
                $model->skillVersions = [];
                $n1 = 0;
                foreach ($map['SkillVersions'] as $item1) {
                    $model->skillVersions[$n1] = skillVersions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Slug'])) {
            $model->slug = $map['Slug'];
        }

        if (isset($map['SourceMarket'])) {
            $model->sourceMarket = $map['SourceMarket'];
        }

        if (isset($map['SourceMarketName'])) {
            $model->sourceMarketName = $map['SourceMarketName'];
        }

        if (isset($map['SupplierType'])) {
            $model->supplierType = $map['SupplierType'];
        }

        return $model;
    }
}
