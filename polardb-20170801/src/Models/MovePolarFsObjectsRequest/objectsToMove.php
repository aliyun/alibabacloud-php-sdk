<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\MovePolarFsObjectsRequest;

use AlibabaCloud\Dara\Model;

class objectsToMove extends Model
{
    /**
     * @var string
     */
    public $destinationPath;

    /**
     * @var string
     */
    public $sourcePath;
    protected $_name = [
        'destinationPath' => 'DestinationPath',
        'sourcePath' => 'SourcePath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationPath) {
            $res['DestinationPath'] = $this->destinationPath;
        }

        if (null !== $this->sourcePath) {
            $res['SourcePath'] = $this->sourcePath;
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
        if (isset($map['DestinationPath'])) {
            $model->destinationPath = $map['DestinationPath'];
        }

        if (isset($map['SourcePath'])) {
            $model->sourcePath = $map['SourcePath'];
        }

        return $model;
    }
}
