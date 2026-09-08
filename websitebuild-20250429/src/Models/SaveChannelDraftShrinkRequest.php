<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class SaveChannelDraftShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $adaptedContent;

    /**
     * @var string
     */
    public $adaptedTitle;

    /**
     * @var string
     */
    public $channelAccountName;

    /**
     * @var string
     */
    public $coverImagesShrink;

    /**
     * @var string
     */
    public $draftId;

    /**
     * @var string
     */
    public $websiteNavName;
    protected $_name = [
        'adaptedContent' => 'AdaptedContent',
        'adaptedTitle' => 'AdaptedTitle',
        'channelAccountName' => 'ChannelAccountName',
        'coverImagesShrink' => 'CoverImages',
        'draftId' => 'DraftId',
        'websiteNavName' => 'WebsiteNavName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptedContent) {
            $res['AdaptedContent'] = $this->adaptedContent;
        }

        if (null !== $this->adaptedTitle) {
            $res['AdaptedTitle'] = $this->adaptedTitle;
        }

        if (null !== $this->channelAccountName) {
            $res['ChannelAccountName'] = $this->channelAccountName;
        }

        if (null !== $this->coverImagesShrink) {
            $res['CoverImages'] = $this->coverImagesShrink;
        }

        if (null !== $this->draftId) {
            $res['DraftId'] = $this->draftId;
        }

        if (null !== $this->websiteNavName) {
            $res['WebsiteNavName'] = $this->websiteNavName;
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
        if (isset($map['AdaptedContent'])) {
            $model->adaptedContent = $map['AdaptedContent'];
        }

        if (isset($map['AdaptedTitle'])) {
            $model->adaptedTitle = $map['AdaptedTitle'];
        }

        if (isset($map['ChannelAccountName'])) {
            $model->channelAccountName = $map['ChannelAccountName'];
        }

        if (isset($map['CoverImages'])) {
            $model->coverImagesShrink = $map['CoverImages'];
        }

        if (isset($map['DraftId'])) {
            $model->draftId = $map['DraftId'];
        }

        if (isset($map['WebsiteNavName'])) {
            $model->websiteNavName = $map['WebsiteNavName'];
        }

        return $model;
    }
}
