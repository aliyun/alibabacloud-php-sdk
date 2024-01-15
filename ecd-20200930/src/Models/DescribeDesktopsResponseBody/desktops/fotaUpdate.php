<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class fotaUpdate extends Model
{
    /**
     * @description The current version of the cloud desktop.
     *
     * @example 0.0.0-D-20220102.000000
     *
     * @var string
     */
    public $currentAppVersion;

    /**
     * @description The version to which the cloud desktop can be updated.
     *
     * @example 0.0.0-R-20220307.190736
     *
     * @var string
     */
    public $newAppVersion;

    /**
     * @description The description of the version to which the cloud desktop can be updated.
     *
     * @example Upgrade package for testing 03-07
     *
     * @var string
     */
    public $releaseNote;

    /**
     * @description The description of the version that can be upgraded in English.
     *
     * @example Release note
     *
     * @var string
     */
    public $releaseNoteEn;

    /**
     * @description The description of the version that can be upgraded in Japanese.
     *
     * @example リリースノート
     *
     * @var string
     */
    public $releaseNoteJp;

    /**
     * @description The size of the installation package for the version to which the cloud desktop can be updated. Unit: KB.
     *
     * @example 108815097
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'currentAppVersion' => 'CurrentAppVersion',
        'newAppVersion'     => 'NewAppVersion',
        'releaseNote'       => 'ReleaseNote',
        'releaseNoteEn'     => 'ReleaseNoteEn',
        'releaseNoteJp'     => 'ReleaseNoteJp',
        'size'              => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentAppVersion) {
            $res['CurrentAppVersion'] = $this->currentAppVersion;
        }
        if (null !== $this->newAppVersion) {
            $res['NewAppVersion'] = $this->newAppVersion;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->releaseNoteEn) {
            $res['ReleaseNoteEn'] = $this->releaseNoteEn;
        }
        if (null !== $this->releaseNoteJp) {
            $res['ReleaseNoteJp'] = $this->releaseNoteJp;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fotaUpdate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentAppVersion'])) {
            $model->currentAppVersion = $map['CurrentAppVersion'];
        }
        if (isset($map['NewAppVersion'])) {
            $model->newAppVersion = $map['NewAppVersion'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['ReleaseNoteEn'])) {
            $model->releaseNoteEn = $map['ReleaseNoteEn'];
        }
        if (isset($map['ReleaseNoteJp'])) {
            $model->releaseNoteJp = $map['ReleaseNoteJp'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
