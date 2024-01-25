<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateComputeTaskByDataSetIdRequest;

use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateComputeTaskByDataSetIdRequest\batchInfoForm\cuVersions;
use AlibabaCloud\Tea\Model;

class batchInfoForm extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var cuVersions[]
     */
    public $cuVersions;
    protected $_name = [
        'appId'      => 'AppId',
        'cuVersions' => 'CuVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cuVersions) {
            $res['CuVersions'] = [];
            if (null !== $this->cuVersions && \is_array($this->cuVersions)) {
                $n = 0;
                foreach ($this->cuVersions as $item) {
                    $res['CuVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return batchInfoForm
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CuVersions'])) {
            if (!empty($map['CuVersions'])) {
                $model->cuVersions = [];
                $n                 = 0;
                foreach ($map['CuVersions'] as $item) {
                    $model->cuVersions[$n++] = null !== $item ? cuVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
