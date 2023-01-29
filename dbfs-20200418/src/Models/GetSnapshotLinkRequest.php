<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class GetSnapshotLinkRequest extends Model
{
    /**
     * @example sl-b3zlgraysgcs9jy********
     *
     * @var string
     */
    public $linkId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'linkId'   => 'LinkId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->linkId) {
            $res['LinkId'] = $this->linkId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSnapshotLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LinkId'])) {
            $model->linkId = $map['LinkId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
