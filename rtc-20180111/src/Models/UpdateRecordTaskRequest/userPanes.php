<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTaskRequest\userPanes\images;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTaskRequest\userPanes\texts;

class userPanes extends Model
{
    /**
     * @var images[]
     */
    public $images;

    /**
     * @var int
     */
    public $paneId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var texts[]
     */
    public $texts;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'images' => 'Images',
        'paneId' => 'PaneId',
        'sourceType' => 'SourceType',
        'texts' => 'Texts',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->texts)) {
            Model::validateArray($this->texts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paneId) {
            $res['PaneId'] = $this->paneId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->texts) {
            if (\is_array($this->texts)) {
                $res['Texts'] = [];
                $n1 = 0;
                foreach ($this->texts as $item1) {
                    $res['Texts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1] = images::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PaneId'])) {
            $model->paneId = $map['PaneId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = [];
                $n1 = 0;
                foreach ($map['Texts'] as $item1) {
                    $model->texts[$n1] = texts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
