<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models;

use AlibabaCloud\Tea\Model;

class ImageAmazonRequest extends Model
{
    /**
     * @var bool
     */
    public $gif;

    /**
     * @var string
     */
    public $imgUrlList;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $templateMode;

    /**
     * @var string[]
     */
    public $textList;
    protected $_name = [
        'gif'          => 'Gif',
        'imgUrlList'   => 'ImgUrlList',
        'instanceName' => 'InstanceName',
        'templateMode' => 'TemplateMode',
        'textList'     => 'TextList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gif) {
            $res['Gif'] = $this->gif;
        }
        if (null !== $this->imgUrlList) {
            $res['ImgUrlList'] = $this->imgUrlList;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->templateMode) {
            $res['TemplateMode'] = $this->templateMode;
        }
        if (null !== $this->textList) {
            $res['TextList'] = $this->textList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageAmazonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Gif'])) {
            $model->gif = $map['Gif'];
        }
        if (isset($map['ImgUrlList'])) {
            $model->imgUrlList = $map['ImgUrlList'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['TemplateMode'])) {
            $model->templateMode = $map['TemplateMode'];
        }
        if (isset($map['TextList'])) {
            if (!empty($map['TextList'])) {
                $model->textList = $map['TextList'];
            }
        }

        return $model;
    }
}
