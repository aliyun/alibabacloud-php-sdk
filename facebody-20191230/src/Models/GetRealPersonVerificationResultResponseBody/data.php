<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\GetRealPersonVerificationResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $passed;

    /**
     * @var string
     */
    public $identityInfo;

    /**
     * @var string
     */
    public $materialMatch;
    protected $_name = [
        'passed'        => 'Passed',
        'identityInfo'  => 'IdentityInfo',
        'materialMatch' => 'MaterialMatch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->identityInfo) {
            $res['IdentityInfo'] = $this->identityInfo;
        }
        if (null !== $this->materialMatch) {
            $res['MaterialMatch'] = $this->materialMatch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['IdentityInfo'])) {
            $model->identityInfo = $map['IdentityInfo'];
        }
        if (isset($map['MaterialMatch'])) {
            $model->materialMatch = $map['MaterialMatch'];
        }

        return $model;
    }
}
