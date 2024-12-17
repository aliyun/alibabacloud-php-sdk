<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class CreateAnchorRequest extends Model
{
    /**
     * @var string
     */
    public $anchorMaterialName;

    /**
     * @example https://yic-pre.oss-cn-hangzhou.aliyuncs.com/common/image/anchor/1733474220549-1733474198960image.png?Expires=3311144948&OSSAccessKeyId=LTAI5tPHLyFPhh4UoRias4Zg&Signature=qldDufvRDj9IUTmOtb9r2451RIU%3D
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $digitalHumanType;

    /**
     * @example F
     *
     * @var string
     */
    public $gender;

    /**
     * @example offlineSynthesis
     *
     * @var string
     */
    public $useScene;
    protected $_name = [
        'anchorMaterialName' => 'anchorMaterialName',
        'coverUrl'           => 'coverUrl',
        'digitalHumanType'   => 'digitalHumanType',
        'gender'             => 'gender',
        'useScene'           => 'useScene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorMaterialName) {
            $res['anchorMaterialName'] = $this->anchorMaterialName;
        }
        if (null !== $this->coverUrl) {
            $res['coverUrl'] = $this->coverUrl;
        }
        if (null !== $this->digitalHumanType) {
            $res['digitalHumanType'] = $this->digitalHumanType;
        }
        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }
        if (null !== $this->useScene) {
            $res['useScene'] = $this->useScene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAnchorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['anchorMaterialName'])) {
            $model->anchorMaterialName = $map['anchorMaterialName'];
        }
        if (isset($map['coverUrl'])) {
            $model->coverUrl = $map['coverUrl'];
        }
        if (isset($map['digitalHumanType'])) {
            $model->digitalHumanType = $map['digitalHumanType'];
        }
        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }
        if (isset($map['useScene'])) {
            $model->useScene = $map['useScene'];
        }

        return $model;
    }
}
