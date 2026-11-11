<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetImageDistributeInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetImageDistributeInfoResponseBody\data\imageRegionDistributeList;

class data extends Model
{
    /**
     * @var imageRegionDistributeList[]
     */
    public $imageRegionDistributeList;

    /**
     * @var string[]
     */
    public $imageRegionList;

    /**
     * @var string
     */
    public $imageSource;
    protected $_name = [
        'imageRegionDistributeList' => 'ImageRegionDistributeList',
        'imageRegionList' => 'ImageRegionList',
        'imageSource' => 'ImageSource',
    ];

    public function validate()
    {
        if (\is_array($this->imageRegionDistributeList)) {
            Model::validateArray($this->imageRegionDistributeList);
        }
        if (\is_array($this->imageRegionList)) {
            Model::validateArray($this->imageRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageRegionDistributeList) {
            if (\is_array($this->imageRegionDistributeList)) {
                $res['ImageRegionDistributeList'] = [];
                $n1 = 0;
                foreach ($this->imageRegionDistributeList as $item1) {
                    $res['ImageRegionDistributeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageRegionList) {
            if (\is_array($this->imageRegionList)) {
                $res['ImageRegionList'] = [];
                $n1 = 0;
                foreach ($this->imageRegionList as $item1) {
                    $res['ImageRegionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageSource) {
            $res['ImageSource'] = $this->imageSource;
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
        if (isset($map['ImageRegionDistributeList'])) {
            if (!empty($map['ImageRegionDistributeList'])) {
                $model->imageRegionDistributeList = [];
                $n1 = 0;
                foreach ($map['ImageRegionDistributeList'] as $item1) {
                    $model->imageRegionDistributeList[$n1] = imageRegionDistributeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageRegionList'])) {
            if (!empty($map['ImageRegionList'])) {
                $model->imageRegionList = [];
                $n1 = 0;
                foreach ($map['ImageRegionList'] as $item1) {
                    $model->imageRegionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageSource'])) {
            $model->imageSource = $map['ImageSource'];
        }

        return $model;
    }
}
