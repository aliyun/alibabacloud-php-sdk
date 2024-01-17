<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDataSourceOrderConfigResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDataSourceOrderConfigResponseBody\data\userConfigDataSourceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var userConfigDataSourceList[]
     */
    public $userConfigDataSourceList;
    protected $_name = [
        'userConfigDataSourceList' => 'UserConfigDataSourceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userConfigDataSourceList) {
            $res['UserConfigDataSourceList'] = [];
            if (null !== $this->userConfigDataSourceList && \is_array($this->userConfigDataSourceList)) {
                $n = 0;
                foreach ($this->userConfigDataSourceList as $item) {
                    $res['UserConfigDataSourceList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['UserConfigDataSourceList'])) {
            if (!empty($map['UserConfigDataSourceList'])) {
                $model->userConfigDataSourceList = [];
                $n                               = 0;
                foreach ($map['UserConfigDataSourceList'] as $item) {
                    $model->userConfigDataSourceList[$n++] = null !== $item ? userConfigDataSourceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
