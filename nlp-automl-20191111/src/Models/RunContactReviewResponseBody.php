<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunContactReviewResponseBody\contactContent;
use AlibabaCloud\Tea\Model;

class RunContactReviewResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rawContractContent;

    /**
     * @var contactContent
     */
    public $contactContent;
    protected $_name = [
        'requestId'          => 'RequestId',
        'rawContractContent' => 'RawContractContent',
        'contactContent'     => 'ContactContent',
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
        if (null !== $this->rawContractContent) {
            $res['RawContractContent'] = $this->rawContractContent;
        }
        if (null !== $this->contactContent) {
            $res['ContactContent'] = null !== $this->contactContent ? $this->contactContent->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunContactReviewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RawContractContent'])) {
            $model->rawContractContent = $map['RawContractContent'];
        }
        if (isset($map['ContactContent'])) {
            $model->contactContent = contactContent::fromMap($map['ContactContent']);
        }

        return $model;
    }
}
