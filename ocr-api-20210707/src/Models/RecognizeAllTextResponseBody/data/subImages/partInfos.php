<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\partInfoRectList;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\undefined;
use AlibabaCloud\Tea\Model;

class partInfos extends Model
{
    /**
     * @var undefined[][]
     */
    public $partInfoPointsList;

    /**
     * @var partInfoRectList[]
     */
    public $partInfoRectList;

    /**
     * @var string
     */
    public $partTitle;

    /**
     * @var subjectList[]
     */
    public $subjectList;
    protected $_name = [
        'partInfoPointsList' => 'PartInfoPointsList',
        'partInfoRectList'   => 'PartInfoRectList',
        'partTitle'          => 'PartTitle',
        'subjectList'        => 'SubjectList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partInfoPointsList) {
            $res['PartInfoPointsList'] = $this->partInfoPointsList;
        }
        if (null !== $this->partInfoRectList) {
            $res['PartInfoRectList'] = [];
            if (null !== $this->partInfoRectList && \is_array($this->partInfoRectList)) {
                $n = 0;
                foreach ($this->partInfoRectList as $item) {
                    $res['PartInfoRectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->partTitle) {
            $res['PartTitle'] = $this->partTitle;
        }
        if (null !== $this->subjectList) {
            $res['SubjectList'] = [];
            if (null !== $this->subjectList && \is_array($this->subjectList)) {
                $n = 0;
                foreach ($this->subjectList as $item) {
                    $res['SubjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return partInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PartInfoPointsList'])) {
            if (!empty($map['PartInfoPointsList'])) {
                $model->partInfoPointsList = $map['PartInfoPointsList'];
            }
        }
        if (isset($map['PartInfoRectList'])) {
            if (!empty($map['PartInfoRectList'])) {
                $model->partInfoRectList = [];
                $n                       = 0;
                foreach ($map['PartInfoRectList'] as $item) {
                    $model->partInfoRectList[$n++] = null !== $item ? partInfoRectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PartTitle'])) {
            $model->partTitle = $map['PartTitle'];
        }
        if (isset($map['SubjectList'])) {
            if (!empty($map['SubjectList'])) {
                $model->subjectList = [];
                $n                  = 0;
                foreach ($map['SubjectList'] as $item) {
                    $model->subjectList[$n++] = null !== $item ? subjectList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
