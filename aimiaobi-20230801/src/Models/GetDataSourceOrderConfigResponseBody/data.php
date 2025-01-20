<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDataSourceOrderConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDataSourceOrderConfigResponseBody\data\userConfigDataSourceList;

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
        if (\is_array($this->userConfigDataSourceList)) {
            Model::validateArray($this->userConfigDataSourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userConfigDataSourceList) {
            if (\is_array($this->userConfigDataSourceList)) {
                $res['UserConfigDataSourceList'] = [];
                $n1                              = 0;
                foreach ($this->userConfigDataSourceList as $item1) {
                    $res['UserConfigDataSourceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UserConfigDataSourceList'])) {
            if (!empty($map['UserConfigDataSourceList'])) {
                $model->userConfigDataSourceList = [];
                $n1                              = 0;
                foreach ($map['UserConfigDataSourceList'] as $item1) {
                    $model->userConfigDataSourceList[$n1++] = userConfigDataSourceList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
