<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims;
use AlibabaCloud\Tea\Model;

class LookupTmchNoticeResponseBody extends Model
{
    /**
     * @var claims
     */
    public $claims;

    /**
     * @example 586608000000
     *
     * @var int
     */
    public $id;

    /**
     * @example noted
     *
     * @var string
     */
    public $label;

    /**
     * @example 2018-10-15T00:00:00.0Z
     *
     * @var string
     */
    public $notAfter;

    /**
     * @example 2018-10-13T00:00:00.0Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @example 01C10C8E-0468-468C-BCD9-E709BDD0AE8F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'claims'    => 'Claims',
        'id'        => 'Id',
        'label'     => 'Label',
        'notAfter'  => 'NotAfter',
        'notBefore' => 'NotBefore',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->claims) {
            $res['Claims'] = null !== $this->claims ? $this->claims->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LookupTmchNoticeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Claims'])) {
            $model->claims = claims::fromMap($map['Claims']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
