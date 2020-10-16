<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class InvokeMotorModelRequest extends Model
{
    /**
     * @var string
     */
    public $picId;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $picPath;

    /**
     * @var string
     */
    public $picUrl;
    protected $_name = [
        'picId'   => 'PicId',
        'corpId'  => 'CorpId',
        'picPath' => 'PicPath',
        'picUrl'  => 'PicUrl',
    ];

    public function validate()
    {
        Model::validateRequired('picId', $this->picId, true);
        Model::validateRequired('corpId', $this->corpId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picId) {
            $res['PicId'] = $this->picId;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->picPath) {
            $res['PicPath'] = $this->picPath;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeMotorModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicId'])) {
            $model->picId = $map['PicId'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['PicPath'])) {
            $model->picPath = $map['PicPath'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }

        return $model;
    }
}
