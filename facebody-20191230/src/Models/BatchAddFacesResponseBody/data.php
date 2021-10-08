<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesResponseBody\data\failedFaces;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesResponseBody\data\insertedFaces;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var insertedFaces[]
     */
    public $insertedFaces;

    /**
     * @var failedFaces[]
     */
    public $failedFaces;
    protected $_name = [
        'insertedFaces' => 'InsertedFaces',
        'failedFaces'   => 'FailedFaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->insertedFaces) {
            $res['InsertedFaces'] = [];
            if (null !== $this->insertedFaces && \is_array($this->insertedFaces)) {
                $n = 0;
                foreach ($this->insertedFaces as $item) {
                    $res['InsertedFaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failedFaces) {
            $res['FailedFaces'] = [];
            if (null !== $this->failedFaces && \is_array($this->failedFaces)) {
                $n = 0;
                foreach ($this->failedFaces as $item) {
                    $res['FailedFaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InsertedFaces'])) {
            if (!empty($map['InsertedFaces'])) {
                $model->insertedFaces = [];
                $n                    = 0;
                foreach ($map['InsertedFaces'] as $item) {
                    $model->insertedFaces[$n++] = null !== $item ? insertedFaces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailedFaces'])) {
            if (!empty($map['FailedFaces'])) {
                $model->failedFaces = [];
                $n                  = 0;
                foreach ($map['FailedFaces'] as $item) {
                    $model->failedFaces[$n++] = null !== $item ? failedFaces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
