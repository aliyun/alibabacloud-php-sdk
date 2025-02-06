<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryAddUserInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryAddUserInfoResponseBody\data\currentFaceInfos;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryAddUserInfoResponseBody\data\failedFaceInfos;

class data extends Model
{
    /**
     * @var currentFaceInfos[]
     */
    public $currentFaceInfos;
    /**
     * @var failedFaceInfos[]
     */
    public $failedFaceInfos;
    protected $_name = [
        'currentFaceInfos' => 'CurrentFaceInfos',
        'failedFaceInfos'  => 'FailedFaceInfos',
    ];

    public function validate()
    {
        if (\is_array($this->currentFaceInfos)) {
            Model::validateArray($this->currentFaceInfos);
        }
        if (\is_array($this->failedFaceInfos)) {
            Model::validateArray($this->failedFaceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentFaceInfos) {
            if (\is_array($this->currentFaceInfos)) {
                $res['CurrentFaceInfos'] = [];
                $n1                      = 0;
                foreach ($this->currentFaceInfos as $item1) {
                    $res['CurrentFaceInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->failedFaceInfos) {
            if (\is_array($this->failedFaceInfos)) {
                $res['FailedFaceInfos'] = [];
                $n1                     = 0;
                foreach ($this->failedFaceInfos as $item1) {
                    $res['FailedFaceInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CurrentFaceInfos'])) {
            if (!empty($map['CurrentFaceInfos'])) {
                $model->currentFaceInfos = [];
                $n1                      = 0;
                foreach ($map['CurrentFaceInfos'] as $item1) {
                    $model->currentFaceInfos[$n1++] = currentFaceInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['FailedFaceInfos'])) {
            if (!empty($map['FailedFaceInfos'])) {
                $model->failedFaceInfos = [];
                $n1                     = 0;
                foreach ($map['FailedFaceInfos'] as $item1) {
                    $model->failedFaceInfos[$n1++] = failedFaceInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
