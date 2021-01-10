<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class MoveWebHostingFileRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $sourceFilePath;

    /**
     * @var string
     */
    public $targetFilePath;
    protected $_name = [
        'spaceId'        => 'SpaceId',
        'sourceFilePath' => 'SourceFilePath',
        'targetFilePath' => 'TargetFilePath',
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
        if (null !== $this->sourceFilePath) {
            $res['SourceFilePath'] = $this->sourceFilePath;
        }
        if (null !== $this->targetFilePath) {
            $res['TargetFilePath'] = $this->targetFilePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveWebHostingFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SourceFilePath'])) {
            $model->sourceFilePath = $map['SourceFilePath'];
        }
        if (isset($map['TargetFilePath'])) {
            $model->targetFilePath = $map['TargetFilePath'];
        }

        return $model;
    }
}
