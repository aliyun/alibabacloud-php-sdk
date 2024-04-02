<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeCustomOcrTemplateResponseBody;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeCustomOcrTemplateResponseBody\ocrTemplateList\recognizeArea;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeCustomOcrTemplateResponseBody\ocrTemplateList\referArea;
use AlibabaCloud\Tea\Model;

class ocrTemplateList extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $imgUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var recognizeArea[]
     */
    public $recognizeArea;

    /**
     * @var referArea[]
     */
    public $referArea;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'id'            => 'Id',
        'imgUrl'        => 'ImgUrl',
        'name'          => 'Name',
        'recognizeArea' => 'RecognizeArea',
        'referArea'     => 'ReferArea',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imgUrl) {
            $res['ImgUrl'] = $this->imgUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recognizeArea) {
            $res['RecognizeArea'] = [];
            if (null !== $this->recognizeArea && \is_array($this->recognizeArea)) {
                $n = 0;
                foreach ($this->recognizeArea as $item) {
                    $res['RecognizeArea'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->referArea) {
            $res['ReferArea'] = [];
            if (null !== $this->referArea && \is_array($this->referArea)) {
                $n = 0;
                foreach ($this->referArea as $item) {
                    $res['ReferArea'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ocrTemplateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImgUrl'])) {
            $model->imgUrl = $map['ImgUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecognizeArea'])) {
            if (!empty($map['RecognizeArea'])) {
                $model->recognizeArea = [];
                $n                    = 0;
                foreach ($map['RecognizeArea'] as $item) {
                    $model->recognizeArea[$n++] = null !== $item ? recognizeArea::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReferArea'])) {
            if (!empty($map['ReferArea'])) {
                $model->referArea = [];
                $n                = 0;
                foreach ($map['ReferArea'] as $item) {
                    $model->referArea[$n++] = null !== $item ? referArea::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
