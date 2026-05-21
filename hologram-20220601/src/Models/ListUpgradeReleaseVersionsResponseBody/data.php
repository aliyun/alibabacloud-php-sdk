<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListUpgradeReleaseVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $releaseNotesUrl;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $upgradeStrategy;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'releaseNotesUrl' => 'ReleaseNotesUrl',
        'type' => 'Type',
        'upgradeStrategy' => 'UpgradeStrategy',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->upgradeStrategy)) {
            Model::validateArray($this->upgradeStrategy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->releaseNotesUrl) {
            $res['ReleaseNotesUrl'] = $this->releaseNotesUrl;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->upgradeStrategy) {
            if (\is_array($this->upgradeStrategy)) {
                $res['UpgradeStrategy'] = [];
                $n1 = 0;
                foreach ($this->upgradeStrategy as $item1) {
                    $res['UpgradeStrategy'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ReleaseNotesUrl'])) {
            $model->releaseNotesUrl = $map['ReleaseNotesUrl'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpgradeStrategy'])) {
            if (!empty($map['UpgradeStrategy'])) {
                $model->upgradeStrategy = [];
                $n1 = 0;
                foreach ($map['UpgradeStrategy'] as $item1) {
                    $model->upgradeStrategy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
