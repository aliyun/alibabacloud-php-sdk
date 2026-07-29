<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\agentBriefSummary;

use AlibabaCloud\Dara\Model;

class agentBriefs extends Model
{
    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var string
     */
    public $avatarNoResourceUrl;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $subTitle;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'avatarNoResourceUrl' => 'AvatarNoResourceUrl',
        'avatarUrl' => 'AvatarUrl',
        'count' => 'Count',
        'displayName' => 'DisplayName',
        'subTitle' => 'SubTitle',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->avatarNoResourceUrl) {
            $res['AvatarNoResourceUrl'] = $this->avatarNoResourceUrl;
        }

        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->subTitle) {
            $res['SubTitle'] = $this->subTitle;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['AvatarNoResourceUrl'])) {
            $model->avatarNoResourceUrl = $map['AvatarNoResourceUrl'];
        }

        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['SubTitle'])) {
            $model->subTitle = $map['SubTitle'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
