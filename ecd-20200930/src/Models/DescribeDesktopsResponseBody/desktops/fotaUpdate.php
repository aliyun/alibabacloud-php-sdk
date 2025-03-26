<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops;

use AlibabaCloud\Dara\Model;

class fotaUpdate extends Model
{
    /**
     * @var string
     */
    public $currentAppVersion;

    /**
     * @var string
     */
    public $newAppVersion;

    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @var string
     */
    public $releaseNoteEn;

    /**
     * @var string
     */
    public $releaseNoteJp;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'currentAppVersion' => 'CurrentAppVersion',
        'newAppVersion' => 'NewAppVersion',
        'releaseNote' => 'ReleaseNote',
        'releaseNoteEn' => 'ReleaseNoteEn',
        'releaseNoteJp' => 'ReleaseNoteJp',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
