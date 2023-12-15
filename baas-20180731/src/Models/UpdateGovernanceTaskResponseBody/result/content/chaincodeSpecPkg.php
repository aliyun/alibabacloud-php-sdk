<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\UpdateGovernanceTaskResponseBody\result\content;

use AlibabaCloud\SDK\Baas\V20180731\Models\UpdateGovernanceTaskResponseBody\result\content\chaincodeSpecPkg\cs;
use AlibabaCloud\Tea\Model;

class chaincodeSpecPkg extends Model
{
    /**
     * @var cs
     */
    public $cs;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $sha256;
    protected $_name = [
        'cs'     => 'Cs',
        'policy' => 'Policy',
        'sha256' => 'Sha256',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cs) {
            $res['Cs'] = null !== $this->cs ? $this->cs->toMap() : null;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->sha256) {
            $res['Sha256'] = $this->sha256;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chaincodeSpecPkg
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cs'])) {
            $model->cs = cs::fromMap($map['Cs']);
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Sha256'])) {
            $model->sha256 = $map['Sha256'];
        }

        return $model;
    }
}
