<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DeleteAppsRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIdList;
    protected $_name = [
        'appIdList' => 'AppIdList',
    ];

    public function validate()
    {
        if (\is_array($this->appIdList)) {
            Model::validateArray($this->appIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIdList) {
            if (\is_array($this->appIdList)) {
                $res['AppIdList'] = [];
                $n1 = 0;
                foreach ($this->appIdList as $item1) {
                    $res['AppIdList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['AppIdList'])) {
            if (!empty($map['AppIdList'])) {
                $model->appIdList = [];
                $n1 = 0;
                foreach ($map['AppIdList'] as $item1) {
                    $model->appIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
