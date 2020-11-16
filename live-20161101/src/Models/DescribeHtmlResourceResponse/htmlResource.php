<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeHtmlResourceResponse;

use AlibabaCloud\Tea\Model;

class htmlResource extends Model
{
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
    public $htmlContent;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $streamId;
    protected $_name = [
        'htmlResourceId' => 'HtmlResourceId',
        'htmlUrl'        => 'HtmlUrl',
        'htmlContent'    => 'HtmlContent',
        'casterId'       => 'CasterId',
        'config'         => 'Config',
        'streamId'       => 'StreamId',
    ];

    public function validate()
    {
        Model::validateRequired('htmlResourceId', $this->htmlResourceId, true);
        Model::validateRequired('htmlUrl', $this->htmlUrl, true);
        Model::validateRequired('htmlContent', $this->htmlContent, true);
        Model::validateRequired('casterId', $this->casterId, true);
        Model::validateRequired('config', $this->config, true);
        Model::validateRequired('streamId', $this->streamId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->htmlResourceId) {
            $res['HtmlResourceId'] = $this->htmlResourceId;
        }
        if (null !== $this->htmlUrl) {
            $res['HtmlUrl'] = $this->htmlUrl;
        }
        if (null !== $this->htmlContent) {
            $res['HtmlContent'] = $this->htmlContent;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return htmlResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HtmlResourceId'])) {
            $model->htmlResourceId = $map['HtmlResourceId'];
        }
        if (isset($map['HtmlUrl'])) {
            $model->htmlUrl = $map['HtmlUrl'];
        }
        if (isset($map['HtmlContent'])) {
            $model->htmlContent = $map['HtmlContent'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }

        return $model;
    }
}
