<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class EditHtmlResourceRequest extends Model
{
    /**
     * @var string
     */
    public $htmlResourceId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $htmlUrl;

    /**
     * @var string
     */
    public $htmlContent;

    /**
     * @var string
     */
    public $config;
    protected $_name = [
        'htmlResourceId' => 'HtmlResourceId',
        'casterId'       => 'CasterId',
        'htmlUrl'        => 'HtmlUrl',
        'htmlContent'    => 'htmlContent',
        'config'         => 'Config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->htmlResourceId) {
            $res['HtmlResourceId'] = $this->htmlResourceId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->htmlUrl) {
            $res['HtmlUrl'] = $this->htmlUrl;
        }
        if (null !== $this->htmlContent) {
            $res['htmlContent'] = $this->htmlContent;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditHtmlResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HtmlResourceId'])) {
            $model->htmlResourceId = $map['HtmlResourceId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['HtmlUrl'])) {
            $model->htmlUrl = $map['HtmlUrl'];
        }
        if (isset($map['htmlContent'])) {
            $model->htmlContent = $map['htmlContent'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        return $model;
    }
}
