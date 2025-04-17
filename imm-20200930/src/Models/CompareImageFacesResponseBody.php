<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CompareImageFacesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $similarity;
    protected $_name = [
        'requestId' => 'RequestId',
        'similarity' => 'Similarity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }

        return $model;
    }
}
