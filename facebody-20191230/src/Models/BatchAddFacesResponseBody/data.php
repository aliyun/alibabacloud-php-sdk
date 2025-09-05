<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesResponseBody\data\failedFaces;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesResponseBody\data\insertedFaces;

class data extends Model
{
    /**
     * @var failedFaces[]
     */
    public $failedFaces;

    /**
     * @var insertedFaces[]
     */
    public $insertedFaces;
    protected $_name = [
        'failedFaces' => 'FailedFaces',
        'insertedFaces' => 'InsertedFaces',
    ];

    public function validate()
    {
        if (\is_array($this->failedFaces)) {
            Model::validateArray($this->failedFaces);
        }
        if (\is_array($this->insertedFaces)) {
            Model::validateArray($this->insertedFaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedFaces) {
            if (\is_array($this->failedFaces)) {
                $res['FailedFaces'] = [];
                $n1 = 0;
                foreach ($this->failedFaces as $item1) {
                    $res['FailedFaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->insertedFaces) {
            if (\is_array($this->insertedFaces)) {
                $res['InsertedFaces'] = [];
                $n1 = 0;
                foreach ($this->insertedFaces as $item1) {
                    $res['InsertedFaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['FailedFaces'])) {
            if (!empty($map['FailedFaces'])) {
                $model->failedFaces = [];
                $n1 = 0;
                foreach ($map['FailedFaces'] as $item1) {
                    $model->failedFaces[$n1] = failedFaces::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InsertedFaces'])) {
            if (!empty($map['InsertedFaces'])) {
                $model->insertedFaces = [];
                $n1 = 0;
                foreach ($map['InsertedFaces'] as $item1) {
                    $model->insertedFaces[$n1] = insertedFaces::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
