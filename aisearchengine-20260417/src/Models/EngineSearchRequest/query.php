<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\EngineSearchRequest;

use AlibabaCloud\Dara\Model;

class query extends Model
{
    /**
     * @var string[]
     */
    public $excludeIds;

    /**
     * @var string[]
     */
    public $imageUrls;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $texts;
    protected $_name = [
        'excludeIds' => 'excludeIds',
        'imageUrls' => 'imageUrls',
        'pageNo' => 'pageNo',
        'pageSize' => 'pageSize',
        'texts' => 'texts',
    ];

    public function validate()
    {
        if (\is_array($this->excludeIds)) {
            Model::validateArray($this->excludeIds);
        }
        if (\is_array($this->imageUrls)) {
            Model::validateArray($this->imageUrls);
        }
        if (\is_array($this->texts)) {
            Model::validateArray($this->texts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeIds) {
            if (\is_array($this->excludeIds)) {
                $res['excludeIds'] = [];
                $n1 = 0;
                foreach ($this->excludeIds as $item1) {
                    $res['excludeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageUrls) {
            if (\is_array($this->imageUrls)) {
                $res['imageUrls'] = [];
                $n1 = 0;
                foreach ($this->imageUrls as $item1) {
                    $res['imageUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNo) {
            $res['pageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->texts) {
            if (\is_array($this->texts)) {
                $res['texts'] = [];
                $n1 = 0;
                foreach ($this->texts as $item1) {
                    $res['texts'][$n1] = $item1;
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
        if (isset($map['excludeIds'])) {
            if (!empty($map['excludeIds'])) {
                $model->excludeIds = [];
                $n1 = 0;
                foreach ($map['excludeIds'] as $item1) {
                    $model->excludeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['imageUrls'])) {
            if (!empty($map['imageUrls'])) {
                $model->imageUrls = [];
                $n1 = 0;
                foreach ($map['imageUrls'] as $item1) {
                    $model->imageUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['pageNo'])) {
            $model->pageNo = $map['pageNo'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['texts'])) {
            if (!empty($map['texts'])) {
                $model->texts = [];
                $n1 = 0;
                foreach ($map['texts'] as $item1) {
                    $model->texts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
