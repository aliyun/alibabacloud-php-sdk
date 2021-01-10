<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonResponseBody\failedImages;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonResponseBody\registeredPersonages;
use AlibabaCloud\Tea\Model;

class RegisterMediaDetailPersonResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var registeredPersonages
     */
    public $registeredPersonages;

    /**
     * @var failedImages
     */
    public $failedImages;
    protected $_name = [
        'requestId'            => 'RequestId',
        'registeredPersonages' => 'RegisteredPersonages',
        'failedImages'         => 'FailedImages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->registeredPersonages) {
            $res['RegisteredPersonages'] = null !== $this->registeredPersonages ? $this->registeredPersonages->toMap() : null;
        }
        if (null !== $this->failedImages) {
            $res['FailedImages'] = null !== $this->failedImages ? $this->failedImages->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterMediaDetailPersonResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegisteredPersonages'])) {
            $model->registeredPersonages = registeredPersonages::fromMap($map['RegisteredPersonages']);
        }
        if (isset($map['FailedImages'])) {
            $model->failedImages = failedImages::fromMap($map['FailedImages']);
        }

        return $model;
    }
}
