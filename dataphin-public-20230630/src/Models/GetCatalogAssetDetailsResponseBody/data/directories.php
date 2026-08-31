<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\directories\directoryChain;

class directories extends Model
{
    /**
     * @var directoryChain[]
     */
    public $directoryChain;

    /**
     * @var string
     */
    public $directoryDescription;

    /**
     * @var int
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryName;

    /**
     * @var string
     */
    public $topicDescription;

    /**
     * @var int
     */
    public $topicId;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'directoryChain' => 'DirectoryChain',
        'directoryDescription' => 'DirectoryDescription',
        'directoryId' => 'DirectoryId',
        'directoryName' => 'DirectoryName',
        'topicDescription' => 'TopicDescription',
        'topicId' => 'TopicId',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        if (\is_array($this->directoryChain)) {
            Model::validateArray($this->directoryChain);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryChain) {
            if (\is_array($this->directoryChain)) {
                $res['DirectoryChain'] = [];
                $n1 = 0;
                foreach ($this->directoryChain as $item1) {
                    $res['DirectoryChain'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->directoryDescription) {
            $res['DirectoryDescription'] = $this->directoryDescription;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }

        if (null !== $this->topicDescription) {
            $res['TopicDescription'] = $this->topicDescription;
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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
        if (isset($map['DirectoryChain'])) {
            if (!empty($map['DirectoryChain'])) {
                $model->directoryChain = [];
                $n1 = 0;
                foreach ($map['DirectoryChain'] as $item1) {
                    $model->directoryChain[$n1] = directoryChain::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DirectoryDescription'])) {
            $model->directoryDescription = $map['DirectoryDescription'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }

        if (isset($map['TopicDescription'])) {
            $model->topicDescription = $map['TopicDescription'];
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
