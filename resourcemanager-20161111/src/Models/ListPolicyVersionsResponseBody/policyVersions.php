<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListPolicyVersionsResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListPolicyVersionsResponseBody\policyVersions\policyVersion;
use AlibabaCloud\Tea\Model;

class policyVersions extends Model
{
    /**
     * @var policyVersion[]
     */
    public $policyVersion;
    protected $_name = [
        'policyVersion' => 'PolicyVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = [];
            if (null !== $this->policyVersion && \is_array($this->policyVersion)) {
                $n = 0;
                foreach ($this->policyVersion as $item) {
                    $res['PolicyVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyVersion'])) {
            if (!empty($map['PolicyVersion'])) {
                $model->policyVersion = [];
                $n                    = 0;
                foreach ($map['PolicyVersion'] as $item) {
                    $model->policyVersion[$n++] = null !== $item ? policyVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
