<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAssetDirectoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAssetDirectoriesResponseBody\data\directoryList;

class data extends Model
{
    /**
     * @var directoryList[]
     */
    public $directoryList;

    /**
     * @var int
     */
    public $topicId;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'directoryList' => 'DirectoryList',
        'topicId' => 'TopicId',
        'topicName' => 'TopicName',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->directoryList)) {
            Model::validateArray($this->directoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryList) {
            if (\is_array($this->directoryList)) {
                $res['DirectoryList'] = [];
                $n1 = 0;
                foreach ($this->directoryList as $item1) {
                    $res['DirectoryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DirectoryList'])) {
            if (!empty($map['DirectoryList'])) {
                $model->directoryList = [];
                $n1 = 0;
                foreach ($map['DirectoryList'] as $item1) {
                    $model->directoryList[$n1] = directoryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
