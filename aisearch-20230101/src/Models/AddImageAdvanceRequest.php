<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AddImageAdvanceRequest extends Model
{
    /**
     * @var Box[]
     */
    public $boxes;

    /**
     * @var string
     */
    public $customContent;

    /**
     * @var int
     */
    public $detectLimit;

    /**
     * @var int
     */
    public $intAttr;

    /**
     * @var Stream
     */
    public $picContentObject;

    /**
     * @var string
     */
    public $picName;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var string
     */
    public $strAttr;
    protected $_name = [
        'boxes'            => 'Boxes',
        'customContent'    => 'CustomContent',
        'detectLimit'      => 'DetectLimit',
        'intAttr'          => 'IntAttr',
        'picContentObject' => 'PicContent',
        'picName'          => 'PicName',
        'picUrl'           => 'PicUrl',
        'strAttr'          => 'StrAttr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = [];
            if (null !== $this->boxes && \is_array($this->boxes)) {
                $n = 0;
                foreach ($this->boxes as $item) {
                    $res['Boxes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }
        if (null !== $this->detectLimit) {
            $res['DetectLimit'] = $this->detectLimit;
        }
        if (null !== $this->intAttr) {
            $res['IntAttr'] = $this->intAttr;
        }
        if (null !== $this->picContentObject) {
            $res['PicContent'] = $this->picContentObject;
        }
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->strAttr) {
            $res['StrAttr'] = $this->strAttr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $n            = 0;
                foreach ($map['Boxes'] as $item) {
                    $model->boxes[$n++] = null !== $item ? Box::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['DetectLimit'])) {
            $model->detectLimit = $map['DetectLimit'];
        }
        if (isset($map['IntAttr'])) {
            $model->intAttr = $map['IntAttr'];
        }
        if (isset($map['PicContent'])) {
            $model->picContentObject = $map['PicContent'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['StrAttr'])) {
            $model->strAttr = $map['StrAttr'];
        }

        return $model;
    }
}
