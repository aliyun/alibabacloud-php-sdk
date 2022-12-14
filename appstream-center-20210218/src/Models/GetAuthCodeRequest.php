<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218\Models;

use AlibabaCloud\Tea\Model;

class GetAuthCodeRequest extends Model
{
    /**
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example alice
     *
     * @var string
     */
    public $externalUserId;

    /**
     * @var string
     */
    public $policy;
    protected $_name = [
        'endUserId'      => 'EndUserId',
        'externalUserId' => 'ExternalUserId',
        'policy'         => 'Policy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->externalUserId) {
            $res['ExternalUserId'] = $this->externalUserId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuthCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['ExternalUserId'])) {
            $model->externalUserId = $map['ExternalUserId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}
