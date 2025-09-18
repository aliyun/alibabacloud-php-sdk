<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;

class CreateCommandResponseBody extends Model
{
    /**
     * @var string
     */
    public $domainCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $toolId;
    protected $_name = [
        'domainCode' => 'DomainCode',
        'requestId' => 'RequestId',
        'toolId' => 'ToolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->toolId) {
            $res['ToolId'] = $this->toolId;
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
        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ToolId'])) {
            $model->toolId = $map['ToolId'];
        }

        return $model;
    }
}
