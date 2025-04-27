<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

class data extends Model
{
    /**
     * @var string[]
     */
    public $algoServer;

    /**
     * @var string
     */
    public $algoVersion;

    /**
     * @var string
     */
    public $content;

    /**
     * @var mixed
     */
    public $debugInfo;

    /**
     * @var int
     */
    public $height;

    /**
     * @var bool
     */
    public $isMixedMode;

    /**
     * @var string
     */
    public $kvExcelUrl;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $subImageCount;

    /**
     * @var subImages[]
     */
    public $subImages;

    /**
     * @var int
     */
    public $width;

    /**
     * @var string
     */
    public $xmlResult;
    protected $_name = [
        'algoServer' => 'AlgoServer',
        'algoVersion' => 'AlgoVersion',
        'content' => 'Content',
        'debugInfo' => 'DebugInfo',
        'height' => 'Height',
        'isMixedMode' => 'IsMixedMode',
        'kvExcelUrl' => 'KvExcelUrl',
        'pageNo' => 'PageNo',
        'subImageCount' => 'SubImageCount',
        'subImages' => 'SubImages',
        'width' => 'Width',
        'xmlResult' => 'XmlResult',
    ];

    public function validate()
    {
        if (\is_array($this->algoServer)) {
            Model::validateArray($this->algoServer);
        }
        if (\is_array($this->subImages)) {
            Model::validateArray($this->subImages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algoServer) {
            if (\is_array($this->algoServer)) {
                $res['AlgoServer'] = [];
                $n1 = 0;
                foreach ($this->algoServer as $item1) {
                    $res['AlgoServer'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->algoVersion) {
            $res['AlgoVersion'] = $this->algoVersion;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->debugInfo) {
            $res['DebugInfo'] = $this->debugInfo;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->isMixedMode) {
            $res['IsMixedMode'] = $this->isMixedMode;
        }

        if (null !== $this->kvExcelUrl) {
            $res['KvExcelUrl'] = $this->kvExcelUrl;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->subImageCount) {
            $res['SubImageCount'] = $this->subImageCount;
        }

        if (null !== $this->subImages) {
            if (\is_array($this->subImages)) {
                $res['SubImages'] = [];
                $n1 = 0;
                foreach ($this->subImages as $item1) {
                    $res['SubImages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        if (null !== $this->xmlResult) {
            $res['XmlResult'] = $this->xmlResult;
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
        if (isset($map['AlgoServer'])) {
            if (!empty($map['AlgoServer'])) {
                $model->algoServer = [];
                $n1 = 0;
                foreach ($map['AlgoServer'] as $item1) {
                    $model->algoServer[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AlgoVersion'])) {
            $model->algoVersion = $map['AlgoVersion'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DebugInfo'])) {
            $model->debugInfo = $map['DebugInfo'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['IsMixedMode'])) {
            $model->isMixedMode = $map['IsMixedMode'];
        }

        if (isset($map['KvExcelUrl'])) {
            $model->kvExcelUrl = $map['KvExcelUrl'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['SubImageCount'])) {
            $model->subImageCount = $map['SubImageCount'];
        }

        if (isset($map['SubImages'])) {
            if (!empty($map['SubImages'])) {
                $model->subImages = [];
                $n1 = 0;
                foreach ($map['SubImages'] as $item1) {
                    $model->subImages[$n1++] = subImages::fromMap($item1);
                }
            }
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        if (isset($map['XmlResult'])) {
            $model->xmlResult = $map['XmlResult'];
        }

        return $model;
    }
}
