<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult\imageResult;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult\textResult;

class pageResult extends Model
{
    /**
     * @var imageResult[]
     */
    public $imageResult;
    /**
     * @var string
     */
    public $imageUrl;
    /**
     * @var int
     */
    public $pageNum;
    /**
     * @var textResult[]
     */
    public $textResult;
    /**
     * @var string
     */
    public $textUrl;
    protected $_name = [
        'imageResult' => 'ImageResult',
        'imageUrl'    => 'ImageUrl',
        'pageNum'     => 'PageNum',
        'textResult'  => 'TextResult',
        'textUrl'     => 'TextUrl',
    ];

    public function validate()
    {
        if (\is_array($this->imageResult)) {
            Model::validateArray($this->imageResult);
        }
        if (\is_array($this->textResult)) {
            Model::validateArray($this->textResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageResult) {
            if (\is_array($this->imageResult)) {
                $res['ImageResult'] = [];
                $n1                 = 0;
                foreach ($this->imageResult as $item1) {
                    $res['ImageResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->textResult) {
            if (\is_array($this->textResult)) {
                $res['TextResult'] = [];
                $n1                = 0;
                foreach ($this->textResult as $item1) {
                    $res['TextResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->textUrl) {
            $res['TextUrl'] = $this->textUrl;
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
        if (isset($map['ImageResult'])) {
            if (!empty($map['ImageResult'])) {
                $model->imageResult = [];
                $n1                 = 0;
                foreach ($map['ImageResult'] as $item1) {
                    $model->imageResult[$n1++] = imageResult::fromMap($item1);
                }
            }
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['TextResult'])) {
            if (!empty($map['TextResult'])) {
                $model->textResult = [];
                $n1                = 0;
                foreach ($map['TextResult'] as $item1) {
                    $model->textResult[$n1++] = textResult::fromMap($item1);
                }
            }
        }

        if (isset($map['TextUrl'])) {
            $model->textUrl = $map['TextUrl'];
        }

        return $model;
    }
}
