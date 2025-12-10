<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyVersionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyVersionsResponseBody\policyVersions\policyVersion;

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
        if (\is_array($this->policyVersion)) {
            Model::validateArray($this->policyVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyVersion) {
            if (\is_array($this->policyVersion)) {
                $res['PolicyVersion'] = [];
                $n1 = 0;
                foreach ($this->policyVersion as $item1) {
                    $res['PolicyVersion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PolicyVersion'])) {
            if (!empty($map['PolicyVersion'])) {
                $model->policyVersion = [];
                $n1 = 0;
                foreach ($map['PolicyVersion'] as $item1) {
                    $model->policyVersion[$n1] = policyVersion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
