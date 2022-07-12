<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops;

use AlibabaCloud\Tea\Model;

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
     * @var int
     */
    public $size;
    protected $_name = [
        'currentAppVersion' => 'CurrentAppVersion',
        'newAppVersion'     => 'NewAppVersion',
        'releaseNote'       => 'ReleaseNote',
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
