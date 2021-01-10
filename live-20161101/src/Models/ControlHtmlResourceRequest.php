<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ControlHtmlResourceRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $htmlResourceId;

    /**
     * @var string
     */
    public $htmlUrl;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $operate;
    protected $_name = [
        'ownerId'        => 'OwnerId',
        'htmlResourceId' => 'HtmlResourceId',
        'htmlUrl'        => 'htmlUrl',
        'casterId'       => 'CasterId',
        'operate'        => 'Operate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->htmlResourceId) {
            $res['HtmlResourceId'] = $this->htmlResourceId;
        }
        if (null !== $this->htmlUrl) {
            $res['htmlUrl'] = $this->htmlUrl;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->operate) {
            $res['Operate'] = $this->operate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ControlHtmlResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['HtmlResourceId'])) {
            $model->htmlResourceId = $map['HtmlResourceId'];
        }
        if (isset($map['htmlUrl'])) {
            $model->htmlUrl = $map['htmlUrl'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['Operate'])) {
            $model->operate = $map['Operate'];
        }

        return $model;
    }
}
