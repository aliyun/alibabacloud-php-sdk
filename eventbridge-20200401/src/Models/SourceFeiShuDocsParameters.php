<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class SourceFeiShuDocsParameters extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var string
     */
    public $knowledgeSpaceName;

    /**
     * @var string
     */
    public $loadMode;
    protected $_name = [
        'appId' => 'AppId',
        'appSecret' => 'AppSecret',
        'knowledgeSpaceName' => 'KnowledgeSpaceName',
        'loadMode' => 'LoadMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }

        if (null !== $this->knowledgeSpaceName) {
            $res['KnowledgeSpaceName'] = $this->knowledgeSpaceName;
        }

        if (null !== $this->loadMode) {
            $res['LoadMode'] = $this->loadMode;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }

        if (isset($map['KnowledgeSpaceName'])) {
            $model->knowledgeSpaceName = $map['KnowledgeSpaceName'];
        }

        if (isset($map['LoadMode'])) {
            $model->loadMode = $map['LoadMode'];
        }

        return $model;
    }
}
