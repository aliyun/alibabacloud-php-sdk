<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteQualityWatchesRequest;

use AlibabaCloud\Dara\Model;

class deleteCommand extends Model
{
    /**
     * @var int[]
     */
    public $watchIdList;
    protected $_name = [
        'watchIdList' => 'WatchIdList',
    ];

    public function validate()
    {
        if (\is_array($this->watchIdList)) {
            Model::validateArray($this->watchIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->watchIdList) {
            if (\is_array($this->watchIdList)) {
                $res['WatchIdList'] = [];
                $n1 = 0;
                foreach ($this->watchIdList as $item1) {
                    $res['WatchIdList'][$n1] = $item1;
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
        if (isset($map['WatchIdList'])) {
            if (!empty($map['WatchIdList'])) {
                $model->watchIdList = [];
                $n1 = 0;
                foreach ($map['WatchIdList'] as $item1) {
                    $model->watchIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
