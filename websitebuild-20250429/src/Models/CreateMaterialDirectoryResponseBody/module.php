<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateMaterialDirectoryResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $directoryId;
    protected $_name = [
        'directoryId' => 'DirectoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        return $model;
    }
}
