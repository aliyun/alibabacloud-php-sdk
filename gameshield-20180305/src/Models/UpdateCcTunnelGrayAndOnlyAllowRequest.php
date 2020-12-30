<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class UpdateCcTunnelGrayAndOnlyAllowRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $onlyAllow;

    /**
     * @var int
     */
    public $gray;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'lang'      => 'Lang',
        'bizId'     => 'BizId',
        'onlyAllow' => 'OnlyAllow',
        'gray'      => 'Gray',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->onlyAllow) {
            $res['OnlyAllow'] = $this->onlyAllow;
        }
        if (null !== $this->gray) {
            $res['Gray'] = $this->gray;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCcTunnelGrayAndOnlyAllowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['OnlyAllow'])) {
            $model->onlyAllow = $map['OnlyAllow'];
        }
        if (isset($map['Gray'])) {
            $model->gray = $map['Gray'];
        }

        return $model;
    }
}
