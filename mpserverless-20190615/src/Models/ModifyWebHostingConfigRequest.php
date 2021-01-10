<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebHostingConfigRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $indexPath;

    /**
     * @var string
     */
    public $errorPath;
    protected $_name = [
        'spaceId'   => 'SpaceId',
        'indexPath' => 'IndexPath',
        'errorPath' => 'ErrorPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->indexPath) {
            $res['IndexPath'] = $this->indexPath;
        }
        if (null !== $this->errorPath) {
            $res['ErrorPath'] = $this->errorPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebHostingConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['IndexPath'])) {
            $model->indexPath = $map['IndexPath'];
        }
        if (isset($map['ErrorPath'])) {
            $model->errorPath = $map['ErrorPath'];
        }

        return $model;
    }
}
