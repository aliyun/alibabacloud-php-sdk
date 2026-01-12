<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\CreateProjectResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\CreateProjectResponseBody\data\source\policy;

class source extends Model
{
    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var policy
     */
    public $policy;
    protected $_name = [
        'ossKey' => 'OssKey',
        'policy' => 'Policy',
    ];

    public function validate()
    {
        if (null !== $this->policy) {
            $this->policy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toArray($noStream) : $this->policy;
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
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }

        return $model;
    }
}
