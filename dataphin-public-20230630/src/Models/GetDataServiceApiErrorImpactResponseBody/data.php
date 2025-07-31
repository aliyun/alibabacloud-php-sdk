<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiErrorImpactResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiErrorImpactResponseBody\data\errorApiList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiErrorImpactResponseBody\data\errorAppList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var errorApiList[]
     */
    public $errorApiList;

    /**
     * @var errorAppList[]
     */
    public $errorAppList;
    protected $_name = [
        'errorApiList' => 'ErrorApiList',
        'errorAppList' => 'ErrorAppList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorApiList) {
            $res['ErrorApiList'] = [];
            if (null !== $this->errorApiList && \is_array($this->errorApiList)) {
                $n = 0;
                foreach ($this->errorApiList as $item) {
                    $res['ErrorApiList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorAppList) {
            $res['ErrorAppList'] = [];
            if (null !== $this->errorAppList && \is_array($this->errorAppList)) {
                $n = 0;
                foreach ($this->errorAppList as $item) {
                    $res['ErrorAppList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ErrorApiList'])) {
            if (!empty($map['ErrorApiList'])) {
                $model->errorApiList = [];
                $n = 0;
                foreach ($map['ErrorApiList'] as $item) {
                    $model->errorApiList[$n++] = null !== $item ? errorApiList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorAppList'])) {
            if (!empty($map['ErrorAppList'])) {
                $model->errorAppList = [];
                $n = 0;
                foreach ($map['ErrorAppList'] as $item) {
                    $model->errorAppList[$n++] = null !== $item ? errorAppList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
