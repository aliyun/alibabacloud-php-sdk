<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\Tea\Model;

class UpgradeMinorVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $newVersion;

    /**
     * @var string
     */
    public $oldVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'newVersion' => 'NewVersion',
        'oldVersion' => 'OldVersion',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newVersion) {
            $res['NewVersion'] = $this->newVersion;
        }
        if (null !== $this->oldVersion) {
            $res['OldVersion'] = $this->oldVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeMinorVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewVersion'])) {
            $model->newVersion = $map['NewVersion'];
        }
        if (isset($map['OldVersion'])) {
            $model->oldVersion = $map['OldVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
