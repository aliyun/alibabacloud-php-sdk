<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions\versionInfos\supportOs;

use AlibabaCloud\Dara\Model;

class supportOsInfos extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $osTag;
    protected $_name = [
        'architecture' => 'Architecture',
        'osTag' => 'OsTag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
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
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }

        return $model;
    }
}
