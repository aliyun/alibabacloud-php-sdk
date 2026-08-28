<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class CreateDistributionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $articleId;

    /**
     * @var string
     */
    public $channelsShrink;
    protected $_name = [
        'articleId' => 'ArticleId',
        'channelsShrink' => 'Channels',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articleId) {
            $res['ArticleId'] = $this->articleId;
        }

        if (null !== $this->channelsShrink) {
            $res['Channels'] = $this->channelsShrink;
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
        if (isset($map['ArticleId'])) {
            $model->articleId = $map['ArticleId'];
        }

        if (isset($map['Channels'])) {
            $model->channelsShrink = $map['Channels'];
        }

        return $model;
    }
}
