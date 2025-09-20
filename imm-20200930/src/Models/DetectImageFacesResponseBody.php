<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DetectImageFacesResponseBody extends Model
{
    /**
     * @var Figure[]
     */
    public $faces;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'faces' => 'Faces',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->faces)) {
            Model::validateArray($this->faces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faces) {
            if (\is_array($this->faces)) {
                $res['Faces'] = [];
                $n1 = 0;
                foreach ($this->faces as $item1) {
                    $res['Faces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Faces'])) {
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n1 = 0;
                foreach ($map['Faces'] as $item1) {
                    $model->faces[$n1] = Figure::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
