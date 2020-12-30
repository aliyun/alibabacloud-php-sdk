<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class GetAccessAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $enableOpenAccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $openUri;
    protected $_name = [
        'enableOpenAccess' => 'EnableOpenAccess',
        'requestId'        => 'RequestId',
        'ledgerId'         => 'LedgerId',
        'openUri'          => 'OpenUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableOpenAccess) {
            $res['EnableOpenAccess'] = $this->enableOpenAccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }
        if (null !== $this->openUri) {
            $res['OpenUri'] = $this->openUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableOpenAccess'])) {
            $model->enableOpenAccess = $map['EnableOpenAccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['OpenUri'])) {
            $model->openUri = $map['OpenUri'];
        }

        return $model;
    }
}
