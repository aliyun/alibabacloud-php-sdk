<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewResourceResponseBody\data\resourceDirectory;

class data extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var resourceDirectory
     */
    public $resourceDirectory;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'name' => 'Name',
        'resourceDirectory' => 'ResourceDirectory',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->resourceDirectory) {
            $this->resourceDirectory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->resourceDirectory) {
            $res['ResourceDirectory'] = null !== $this->resourceDirectory ? $this->resourceDirectory->toArray($noStream) : $this->resourceDirectory;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ResourceDirectory'])) {
            $model->resourceDirectory = resourceDirectory::fromMap($map['ResourceDirectory']);
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
