<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models;

use AlibabaCloud\Tea\Model;

class SearchImageByPicRequest extends Model
{
    /**
     * @var Box
     */
    public $box;

    /**
     * @example 0
     *
     * @var int
     */
    public $detectLimit;

    /**
     * @example intAttr = 1000 AND strAttr = "value1"
     *
     * @var string
     */
    public $filter;

    /**
     * @example 1
     *
     * @var int
     */
    public $num;

    /**
     * @example https://my-test.oss-cn-hangzhou.aliyuncs.com/ssth/case.jpeg
     *
     * @var string
     */
    public $picContent;

    /**
     * @example https://my-test.oss-cn-hangzhou.aliyuncs.com/ssth/case.jpeg
     *
     * @var string
     */
    public $picUrl;

    /**
     * @example 0
     *
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'box'         => 'Box',
        'detectLimit' => 'DetectLimit',
        'filter'      => 'Filter',
        'num'         => 'Num',
        'picContent'  => 'PicContent',
        'picUrl'      => 'PicUrl',
        'start'       => 'Start',
        'text'        => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->box) {
            $res['Box'] = null !== $this->box ? $this->box->toMap() : null;
        }
        if (null !== $this->detectLimit) {
            $res['DetectLimit'] = $this->detectLimit;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->picContent) {
            $res['PicContent'] = $this->picContent;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageByPicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Box'])) {
            $model->box = Box::fromMap($map['Box']);
        }
        if (isset($map['DetectLimit'])) {
            $model->detectLimit = $map['DetectLimit'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['PicContent'])) {
            $model->picContent = $map['PicContent'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
