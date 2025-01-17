<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class MediaConvertOutputGroupConfig extends Model
{
    /**
     * @var string
     */
    public $manifestName;
    /**
     * @var MediaObject
     */
    public $outputFileBase;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'manifestName'   => 'ManifestName',
        'outputFileBase' => 'OutputFileBase',
        'type'           => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->outputFileBase) {
            $this->outputFileBase->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->manifestName) {
            $res['ManifestName'] = $this->manifestName;
        }

        if (null !== $this->outputFileBase) {
            $res['OutputFileBase'] = null !== $this->outputFileBase ? $this->outputFileBase->toArray($noStream) : $this->outputFileBase;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ManifestName'])) {
            $model->manifestName = $map['ManifestName'];
        }

        if (isset($map['OutputFileBase'])) {
            $model->outputFileBase = MediaObject::fromMap($map['OutputFileBase']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
