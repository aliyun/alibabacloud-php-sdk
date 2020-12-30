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
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $label;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $notBefore;

    /**
     * @var string
     */
    public $notAfter;
    protected $_name = [
        'claims'    => 'Claims',
        'requestId' => 'RequestId',
        'label'     => 'Label',
        'id'        => 'Id',
        'notBefore' => 'NotBefore',
        'notAfter'  => 'NotAfter',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }

        return $model;
    }
}
