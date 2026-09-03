<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetAttributePassingSettingResponseBody;

use AlibabaCloud\Dara\Model;

class attributePassingSetting extends Model
{
    /**
     * @var string
     */
    public $sourceIdentityPassing;
    protected $_name = [
        'sourceIdentityPassing' => 'SourceIdentityPassing',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['SourceIdentityPassing'])) {
            $model->sourceIdentityPassing = $map['SourceIdentityPassing'];
        }

        return $model;
    }
}
