<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class UpdateAttributePassingSettingRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $sourceIdentityPassing;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'sourceIdentityPassing' => 'SourceIdentityPassing',
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

        if (null !== $this->sourceIdentityPassing) {
            $res['SourceIdentityPassing'] = $this->sourceIdentityPassing;
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

        if (isset($map['SourceIdentityPassing'])) {
            $model->sourceIdentityPassing = $map['SourceIdentityPassing'];
        }

        return $model;
    }
}
