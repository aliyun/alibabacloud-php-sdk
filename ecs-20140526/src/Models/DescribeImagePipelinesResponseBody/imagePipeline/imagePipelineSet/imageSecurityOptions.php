<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\Dara\Model;

class imageSecurityOptions extends Model
{
    /**
     * @var string
     */
    public $securityScanMode;
    protected $_name = [
        'securityScanMode' => 'SecurityScanMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityScanMode) {
            $res['SecurityScanMode'] = $this->securityScanMode;
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
        if (isset($map['SecurityScanMode'])) {
            $model->securityScanMode = $map['SecurityScanMode'];
        }

        return $model;
    }
}
