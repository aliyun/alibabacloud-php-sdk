<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class RecognizeImageRequest extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $corpId;

    /**
     * @example iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACZUlEQVQ4T42TX2hSURzHf+feq1OnaDFIF42uWougkNSH3XDWxgraQ0RImdQwofcgih5GT7Uoas8xm9UyAgdRjyNClJYs/xEELlY5w2ZlpJtM5/0X95aiqdV5OnDO+dzf7/v7XAT/XggA+E7XhMOmZTKZtqvl2CuZhFeUq7wSIcRLcW61wmKVtTJPJZPJdOODJoDVanXjGEwFXGlcKaGBwJo/POw1cAwLnng8fq8GqQOsVqv96ZmPQZZHcH2e/H7Lo/uGYYSWF8rnmc/jM7m+cSqlEh7a7xgG4/F4WNiLALPZ3COToJXHp5aJ2ws7ixNurbqlNwCgLqYheG4JRryGKs2hrbFYLC/eGxww5/zOzJbJ18bSFVevUkaw7TNDOFyYyuSvHXzXM+rTfwlFEloRMLTftHr/RFaFb6MWN6mIfoyjgfmagidv5CLo2N4yENrdAAgHnmNS9IfgrqMPyNKLl0mVCLANmNlHzgzWRdoKagXSAEsDdTkL0WhUBPgvmcBxiBQBCKCwsfRcc8Sn58KRBC4CDlBmZuZkBpfrbQWV/P8Aoz6SC0WSvwAjNtOPaUdWQ/RRi5tVRH+tgloQofNrLS0cf0gW58JJze8Q9634nZ+0QohXx3qVQgYtC8PEFhpCzIUiCZ0IEOzrkhDvZ08vY5MLO4oTbp263RhqYxz2GtkqzRoFK+vjtlgsZ5+Npe8KIt2YJ/M3Pbr8X0Ry12z8U2U7gfNzs660tFvCAI6aVT48bWAqNAzVLKyb2FiuYGW3lH8rwUGxwfAK4UyKQYnm0Po6jfYI9nX8mdr17XA48EAg0EFNgJ/jCg8gGGphCgAAAABJRU5ErkJggg==
     *
     * @var string
     */
    public $imageContent;

    /**
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example Face
     *
     * @var string
     */
    public $recognizeType;

    /**
     * @example false
     *
     * @var bool
     */
    public $requireCropImage;

    /**
     * @example damo
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'corpId'           => 'CorpId',
        'imageContent'     => 'ImageContent',
        'imageUrl'         => 'ImageUrl',
        'recognizeType'    => 'RecognizeType',
        'requireCropImage' => 'RequireCropImage',
        'vendor'           => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->imageContent) {
            $res['ImageContent'] = $this->imageContent;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->recognizeType) {
            $res['RecognizeType'] = $this->recognizeType;
        }
        if (null !== $this->requireCropImage) {
            $res['RequireCropImage'] = $this->requireCropImage;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['ImageContent'])) {
            $model->imageContent = $map['ImageContent'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['RecognizeType'])) {
            $model->recognizeType = $map['RecognizeType'];
        }
        if (isset($map['RequireCropImage'])) {
            $model->requireCropImage = $map['RequireCropImage'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
