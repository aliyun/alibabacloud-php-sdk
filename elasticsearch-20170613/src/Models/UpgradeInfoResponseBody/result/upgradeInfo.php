<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeInfoResponseBody\result;

use AlibabaCloud\Dara\Model;

class upgradeInfo extends Model
{
    /**
     * @var string
     */
    public $curRepoVersion;

    /**
     * @var string
     */
    public $updateRepoVersion;

    /**
     * @var bool
     */
    public $upgrade;

    /**
     * @var string
     */
    public $curApackVersion;

    /**
     * @var string
     */
    public $curEsVersion;

    /**
     * @var string
     */
    public $upgradeApackVersion;

    /**
     * @var string
     */
    public $upgradeEsVersion;
    protected $_name = [
        'curRepoVersion' => 'CurRepoVersion',
        'updateRepoVersion' => 'UpdateRepoVersion',
        'upgrade' => 'Upgrade',
        'curApackVersion' => 'curApackVersion',
        'curEsVersion' => 'curEsVersion',
        'upgradeApackVersion' => 'upgradeApackVersion',
        'upgradeEsVersion' => 'upgradeEsVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->curRepoVersion) {
            $res['CurRepoVersion'] = $this->curRepoVersion;
        }

        if (null !== $this->updateRepoVersion) {
            $res['UpdateRepoVersion'] = $this->updateRepoVersion;
        }

        if (null !== $this->upgrade) {
            $res['Upgrade'] = $this->upgrade;
        }

        if (null !== $this->curApackVersion) {
            $res['curApackVersion'] = $this->curApackVersion;
        }

        if (null !== $this->curEsVersion) {
            $res['curEsVersion'] = $this->curEsVersion;
        }

        if (null !== $this->upgradeApackVersion) {
            $res['upgradeApackVersion'] = $this->upgradeApackVersion;
        }

        if (null !== $this->upgradeEsVersion) {
            $res['upgradeEsVersion'] = $this->upgradeEsVersion;
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
        if (isset($map['CurRepoVersion'])) {
            $model->curRepoVersion = $map['CurRepoVersion'];
        }

        if (isset($map['UpdateRepoVersion'])) {
            $model->updateRepoVersion = $map['UpdateRepoVersion'];
        }

        if (isset($map['Upgrade'])) {
            $model->upgrade = $map['Upgrade'];
        }

        if (isset($map['curApackVersion'])) {
            $model->curApackVersion = $map['curApackVersion'];
        }

        if (isset($map['curEsVersion'])) {
            $model->curEsVersion = $map['curEsVersion'];
        }

        if (isset($map['upgradeApackVersion'])) {
            $model->upgradeApackVersion = $map['upgradeApackVersion'];
        }

        if (isset($map['upgradeEsVersion'])) {
            $model->upgradeEsVersion = $map['upgradeEsVersion'];
        }

        return $model;
    }
}
