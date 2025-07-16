<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class FullInstant extends Model
{
    /**
     * @var int
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'snapshotId' => 'snapshotId',
        'tagName' => 'tagName',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotId) {
            $res['snapshotId'] = $this->snapshotId;
        }
        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FullInstant
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['snapshotId'])) {
            $model->snapshotId = $map['snapshotId'];
        }
        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
