<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content;

use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\cisRouterInfo\ccInfos;
use AlibabaCloud\Tea\Model;

class cisRouterInfo extends Model
{
    /**
     * @var ccInfos[]
     */
    public $ccInfos;

    /**
     * @example ccr-1ms84am0
     *
     * @var string
     */
    public $ccrId;
    protected $_name = [
        'ccInfos' => 'CcInfos',
        'ccrId'   => 'CcrId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ccInfos) {
            $res['CcInfos'] = [];
            if (null !== $this->ccInfos && \is_array($this->ccInfos)) {
                $n = 0;
                foreach ($this->ccInfos as $item) {
                    $res['CcInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ccrId) {
            $res['CcrId'] = $this->ccrId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cisRouterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CcInfos'])) {
            if (!empty($map['CcInfos'])) {
                $model->ccInfos = [];
                $n              = 0;
                foreach ($map['CcInfos'] as $item) {
                    $model->ccInfos[$n++] = null !== $item ? ccInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CcrId'])) {
            $model->ccrId = $map['CcrId'];
        }

        return $model;
    }
}
