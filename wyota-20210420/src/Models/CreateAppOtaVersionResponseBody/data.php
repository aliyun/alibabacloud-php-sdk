<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\CreateAppOtaVersionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $versionUid;
    protected $_name = [
        'versionUid' => 'VersionUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionUid) {
            $res['VersionUid'] = $this->versionUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionUid'])) {
            $model->versionUid = $map['VersionUid'];
        }

        return $model;
    }
}
