<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\cisRouterInfo\ccInfos;

class cisRouterInfo extends Model
{
    /**
     * @var ccInfos[]
     */
    public $ccInfos;
    /**
     * @var string
     */
    public $ccrId;
    protected $_name = [
        'ccInfos' => 'CcInfos',
        'ccrId'   => 'CcrId',
    ];

    public function validate()
    {
        if (\is_array($this->ccInfos)) {
            Model::validateArray($this->ccInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ccInfos) {
            if (\is_array($this->ccInfos)) {
                $res['CcInfos'] = [];
                $n1             = 0;
                foreach ($this->ccInfos as $item1) {
                    $res['CcInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ccrId) {
            $res['CcrId'] = $this->ccrId;
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
        if (isset($map['CcInfos'])) {
            if (!empty($map['CcInfos'])) {
                $model->ccInfos = [];
                $n1             = 0;
                foreach ($map['CcInfos'] as $item1) {
                    $model->ccInfos[$n1++] = ccInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['CcrId'])) {
            $model->ccrId = $map['CcrId'];
        }

        return $model;
    }
}
