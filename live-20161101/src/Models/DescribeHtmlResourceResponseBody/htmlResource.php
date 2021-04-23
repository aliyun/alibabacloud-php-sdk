<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeHtmlResourceResponseBody;

use AlibabaCloud\Tea\Model;

class htmlResource extends Model
{
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
    public $streamId;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $htmlResourceId;

    /**
     * @var string
     */
    public $htmlContent;
    protected $_name = [
        'htmlUrl'        => 'HtmlUrl',
        'casterId'       => 'CasterId',
        'streamId'       => 'StreamId',
        'config'         => 'Config',
        'htmlResourceId' => 'HtmlResourceId',
        'htmlContent'    => 'HtmlContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->htmlUrl) {
            $res['HtmlUrl'] = $this->htmlUrl;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->htmlResourceId) {
            $res['HtmlResourceId'] = $this->htmlResourceId;
        }
        if (null !== $this->htmlContent) {
            $res['HtmlContent'] = $this->htmlContent;
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
        if (isset($map['HtmlUrl'])) {
            $model->htmlUrl = $map['HtmlUrl'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['HtmlResourceId'])) {
            $model->htmlResourceId = $map['HtmlResourceId'];
        }
        if (isset($map['HtmlContent'])) {
            $model->htmlContent = $map['HtmlContent'];
        }

        return $model;
    }
}
