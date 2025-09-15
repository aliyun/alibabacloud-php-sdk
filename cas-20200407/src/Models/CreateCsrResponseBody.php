<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class CreateCsrResponseBody extends Model
{
    /**
     * @var string
     */
    public $csr;

    /**
     * @var int
     */
    public $csrId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'csr' => 'Csr',
        'csrId' => 'CsrId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }

        if (null !== $this->csrId) {
            $res['CsrId'] = $this->csrId;
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
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }

        if (isset($map['CsrId'])) {
            $model->csrId = $map['CsrId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
