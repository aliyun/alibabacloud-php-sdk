<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CloneVersionResponseBody extends Model
{
    /**
     * @var int
     */
    public $cloneVersion;

    /**
     * @var int
     */
    public $originVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cloneVersion' => 'CloneVersion',
        'originVersion' => 'OriginVersion',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloneVersion) {
            $res['CloneVersion'] = $this->cloneVersion;
        }

        if (null !== $this->originVersion) {
            $res['OriginVersion'] = $this->originVersion;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CloneVersion'])) {
            $model->cloneVersion = $map['CloneVersion'];
        }

        if (isset($map['OriginVersion'])) {
            $model->originVersion = $map['OriginVersion'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
