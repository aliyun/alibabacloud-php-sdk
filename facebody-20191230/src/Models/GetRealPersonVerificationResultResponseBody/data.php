<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\GetRealPersonVerificationResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $identityInfo;

    /**
     * @var string
     */
    public $materialMatch;

    /**
     * @var bool
     */
    public $passed;
    protected $_name = [
        'identityInfo'  => 'IdentityInfo',
        'materialMatch' => 'MaterialMatch',
        'passed'        => 'Passed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityInfo) {
            $res['IdentityInfo'] = $this->identityInfo;
        }
        if (null !== $this->materialMatch) {
            $res['MaterialMatch'] = $this->materialMatch;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
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
        if (isset($map['IdentityInfo'])) {
            $model->identityInfo = $map['IdentityInfo'];
        }
        if (isset($map['MaterialMatch'])) {
            $model->materialMatch = $map['MaterialMatch'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        return $model;
    }
}
