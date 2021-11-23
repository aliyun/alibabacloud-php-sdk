<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class TagDbfsRequest extends Model
{
    /**
     * @var string
     */
    public $dbfsId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'dbfsId'   => 'DbfsId',
        'regionId' => 'RegionId',
        'tags'     => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbfsId) {
            $res['DbfsId'] = $this->dbfsId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagDbfsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbfsId'])) {
            $model->dbfsId = $map['DbfsId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
