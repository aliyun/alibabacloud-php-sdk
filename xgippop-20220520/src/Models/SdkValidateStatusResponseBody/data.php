<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkValidateStatusResponseBody;

use AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkValidateStatusResponseBody\data\appExtPopList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var appExtPopList[]
     */
    public $appExtPopList;

    /**
     * @var bool
     */
    public $freeFlow;

    /**
     * @var string
     */
    public $pseudoCode;
    protected $_name = [
        'appExtPopList' => 'AppExtPopList',
        'freeFlow'      => 'FreeFlow',
        'pseudoCode'    => 'PseudoCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appExtPopList) {
            $res['AppExtPopList'] = [];
            if (null !== $this->appExtPopList && \is_array($this->appExtPopList)) {
                $n = 0;
                foreach ($this->appExtPopList as $item) {
                    $res['AppExtPopList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->freeFlow) {
            $res['FreeFlow'] = $this->freeFlow;
        }
        if (null !== $this->pseudoCode) {
            $res['PseudoCode'] = $this->pseudoCode;
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
        if (isset($map['AppExtPopList'])) {
            if (!empty($map['AppExtPopList'])) {
                $model->appExtPopList = [];
                $n                    = 0;
                foreach ($map['AppExtPopList'] as $item) {
                    $model->appExtPopList[$n++] = null !== $item ? appExtPopList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FreeFlow'])) {
            $model->freeFlow = $map['FreeFlow'];
        }
        if (isset($map['PseudoCode'])) {
            $model->pseudoCode = $map['PseudoCode'];
        }

        return $model;
    }
}
