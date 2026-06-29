<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class GetAgenticSpaceRequest extends Model
{
    /**
     * @var string
     */
    public $agenticSpaceId;

    /**
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'agenticSpaceId' => 'AgenticSpaceId',
        'fileSystemId' => 'FileSystemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agenticSpaceId) {
            $res['AgenticSpaceId'] = $this->agenticSpaceId;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
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
        if (isset($map['AgenticSpaceId'])) {
            $model->agenticSpaceId = $map['AgenticSpaceId'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        return $model;
    }
}
