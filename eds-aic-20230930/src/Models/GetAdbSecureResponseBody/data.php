<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\GetAdbSecureResponseBody;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetAdbSecureResponseBody\data\adbSecureList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var adbSecureList[]
     */
    public $adbSecureList;
    protected $_name = [
        'adbSecureList' => 'AdbSecureList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adbSecureList) {
            $res['AdbSecureList'] = [];
            if (null !== $this->adbSecureList && \is_array($this->adbSecureList)) {
                $n = 0;
                foreach ($this->adbSecureList as $item) {
                    $res['AdbSecureList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AdbSecureList'])) {
            if (!empty($map['AdbSecureList'])) {
                $model->adbSecureList = [];
                $n                    = 0;
                foreach ($map['AdbSecureList'] as $item) {
                    $model->adbSecureList[$n++] = null !== $item ? adbSecureList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
