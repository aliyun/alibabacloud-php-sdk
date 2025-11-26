<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ExportImageResponseBody extends Model
{
    /**
     * @var string
     */
    public $exportedImageURL;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exportedImageURL' => 'ExportedImageURL',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportedImageURL) {
            $res['ExportedImageURL'] = $this->exportedImageURL;
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
        if (isset($map['ExportedImageURL'])) {
            $model->exportedImageURL = $map['ExportedImageURL'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
